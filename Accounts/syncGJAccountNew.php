import requests

data = {
    "accountID": 23590959, # This would be APIAccount's account ID
    "gjp2": "********", # This would be APIAccount's password with GJP2 encryption
    "secret": "Wmfv3899gc9"
}

req = requests.post("https://www.robtopgames.org/database/accounts/syncGJAccountNew.php", data=data)
print(req.text)
