# SONIC DAILY TRANSACTION HELPER

<hr>

### ⭐💻 Feel free to star this repository and help development by pull request ~

<hr>

## Features

- **Claim 1 SOL Faucet** : Need 2Captcha key.
- **Generate Random Addresses** : 100 Addresses by default.
- **Send SOL** : 0.001 SOL by default.
- **Transaction Delay**: 5 seconds by default.
- **Daily Check In**: Earn 1-2 Mystery Boxes.
- **Claim Transaction Milestones**: Earn 2-6 Mystery Boxes.
- **Open Mystery Box**: Earn 1-5 rings / points.
- **Get User Info**: Get points and boxes count.
- **Integrate with Telegram Bot as Notification**: Make alert of claimed account.

## Installation

- Clone this repo

```
git clone https://github.com/nhaidaar/sonic-daily-tx
cd sonic-daily-tx
```

- Install requirements

```
npm install
```

- Put your private key in `private.txt`

- Put your 2captcha key in `index.js` line 8

```
const captchaKey = 'INSERT_YOUR_2CAPTCHA_KEY_HERE';
```

- If you want to use telegram bot as notification, put your bot token and chat_id in `index.js` line 296, 297

```
const token = 'INSERT_YOUR_TELEGRAM_BOT_TOKEN_HERE';
const chatid = 'INSERT_YOUR_TELEGRAM_BOT_CHATID_HERE';
```

- Run script using `node index.js`
