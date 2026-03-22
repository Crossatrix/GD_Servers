import requests

data = {
    "accountID": 173831, # DevExit's account ID
    "gjp2": "********", # This would be DevExit's password encoded with GJP2 encryption
    "secret": "Wmfv3899gc9",
    "mS": 0,
    "frS": 0,
    "cS": 0,
    "yt": "UCZoN2WLAooS6uhREa9Cgpwg",
    "twitter": "DevExit",
    "twitch": "devexit",
    "instagram": "devexit",
    "tiktok": "",
    "discord": "devexit",
    "custom": "Custom123"
}

req = requests.post('https://www.boomlings.com/database/updateGJAccSettings20.php', data=data)
print(req.text)
