import requests

# With this code, DevExit is deleting his account comment with ID 1772717

data = {
    "accountID": 173831, # DevExit's account ID
    "gjp2": "********", # This would be DevExit's password encoded with GJP2 encryption
    "commentID": 1772717,
    "secret": "Wmfd2893gb7"
}

r = requests.post('https://www.boomlings.com/database/deleteGJAccComment20.php', data=data)
print(req.text)
