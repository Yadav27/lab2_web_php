# lab2_web_php
 In this lab we are managing inventory.
 we have made functionality to add new item in which we are taking inventory.json and adding item to that file.
 While displaying the items we use the same json file.
 To check the expiry date of the given item we check the expiry date with current date and time. If current date and time is greater then expiry date the iten shows the status as expired.
 While adding items to inventory.json it was now alloowing as it did not had write permission. 
 I changed it using chmod so that the inventory.json has all the permission of read, write and update.
