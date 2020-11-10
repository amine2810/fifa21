const express = require('express');
const app = express();
const puppeteer = require("puppeteer");
const useProxy = require('puppeteer-page-proxy');

const bodyParser = require('body-parser');
const cors = require('cors');

app.use(
	bodyParser.urlencoded({
		extended: true,
	}),
);

app.use(cors());
app.use(bodyParser.json());


const destinationUrl =
  "https://signin.ea.com/p/web2/login?execution=e123845875s1&initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fresponse_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.ea.com%252Flogin_check%26state%3D94fc54bd-8c21-4e08-9a4a-6351c1d4dbd6%26client_id%3DEADOTCOM-WEB-SERVER";
const logoutUrl = "https://www.ea.com/logout";
const emailVerificationUrl = "https://www.easports.com/fifa/ultimate-team/web-app/"

app.get('/ScrappingDemo', async function (req, res) {
        const userEmail = req.query.email;
  const userPassword = req.query.password;
   const browser = await puppeteer.launch({
        headless: true,
        args: [
          '--incognito',
          '--disable-web-security'
          ],
      });
      const page = await browser.newPage();

      await page.goto(destinationUrl, { waitUntil: "networkidle2" });

      await page.waitFor(10);

      // Trying with the user name and password

      await page.type('input[name="email"]', userEmail, { delay: 10 });
      await page.type('input[name="password"]', userPassword, { delay: 10 });

      const tagSelector = "#btnLogin";
      await page.waitForSelector(tagSelector);
      await page.click(tagSelector);
      await page.waitForNavigation(20);
      if (page.url().indexOf('https://signin.ea.com/p/web2/login') === -1) {
        await page.waitFor(50);
        await page.setDefaultNavigationTimeout(0);
        const verifyPage = await browser.newPage();
        await verifyPage.setDefaultNavigationTimeout(0);

        await verifyPage.goto(emailVerificationUrl, { waitUntil: "networkidle2" });
        await verifyPage.waitFor(2000);
        const [button] = await verifyPage.$x("//div[@class='ut-login-content']/button[contains(., 'Login')]");
        await button.click();
        await verifyPage.waitForNavigation(20);
        await verifyPage.type('input[name="password"]', userPassword, { delay: 10 });
        await verifyPage.waitForSelector(tagSelector);
        await verifyPage.click(tagSelector);
        await verifyPage.waitForNavigation(20);

        if (verifyPage.url().indexOf('https://signin.ea.com/p/web2/login?executio') !== -1) {
          const newTag = "#btnSendCode";
          await verifyPage.waitForSelector(newTag);
          await verifyPage.click(newTag);
        }
        
        await page.goto(logoutUrl, { waitUntil: "networkidle2" });
        await browser.close();
        res.send({msg:true});
      } else {
        await browser.close();
        res.send({msg:false});
      }

});

app.listen(4000);
