# SpyderWeb
## A website to compare and display http website statistics!

Developed by [Tianheng Hu](https://github.com/615105327), [Simin Zhai](https://github.com/Jasmine424) and [Hariharan Mathavan](https://github.com/hariharan-m) for EC601-Product Design Fall '17.

This project uses a modified version of [httpstat by reorx](https://github.com/reorx/httpstat) to compare and graph the top 10,000 websites ranked by traffic statistics.

### A brief look at the internals

Various technologies are being used in this project including
* Python
* PHP
* HTML
* CSS
* Shell Scripting
* SQL

![Block Diagram](https://github.com/hariharan-m/SpyderWeb/blob/master/Untitled%20Diagram.png "Block Diagram")

### How do you use this project?

* Clone this repo 
* Buy/Rent/Use a VPS or any hosting service which runs Linux (AWS and Google Cloud offer free 1 year trials!) to set up the following software:
  * Apache (move files to /var/www/ )
  * MySQL
* Create a Database with attributes given in the JSON file along with a column for name of the website.
* ``` chmod +x ``` the required scripts 
* Put the following entry in your crontab (change as per requirement, the following lines make the database update every 30 minutes.
```
30 * * * * /path/to/script/readfile.sh

```
And you should be up and running!

### Current Progress

* We are still working on understanding and setting up [Bootstrap] (http://getbootstrap.com/).
* We also need to implement user input and query user's website in Realtime.

Here are some pictures of the website in development.

![1](https://github.com/hariharan-m/SpyderWeb/blob/master/search%20website.png)
![2](https://github.com/hariharan-m/SpyderWeb/blob/master/homepage.png)

