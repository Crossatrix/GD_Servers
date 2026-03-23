import requests

# With this code, DevExit is deleting the comment with ID 31415926

data = {
        "accountID": 173831, # DevExit's account ID
        "gjp2": "********", # This would be DevExit's password encoded with GJP2 encryption
        "commentID": 31415926,
        "levelID": 54953085,
        "secret": "Wmfd2893gb7"
}

req = requests.post("https://www.boomlings.com/database/deleteGJComment20.php", data=data)
print(req.text)
