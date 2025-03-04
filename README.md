# MovieIndex
## Start up
To run this portal, you have to either:
1. Run it locally
2. Copy it to a running Apache machine

## Execution
### Run locally
If you want to run it locally, you at first have to install PHP on your maschine.
It can for example be done by installing XAMPP Control Panel from [their website](https://www.apachefriends.org/download.html).

Download and execute XAMPP for Windows.

1. Open XAMPP Control Panel, and ensure Apache is started
2. Copy the GitHub project to your XAMPP folder, eg. `C:\xampp\htdocs`
3. Open your command promp by running `cmd`
4. Navigate to the folder with the project, eg. `cd C:\xampp\htdocs\MovieIndex\public`
5. Host the project on a wanted port by following command: `php -S localhost:1234`

### Copy it to a running Apache server
Open the file explorer or FileZilla, navigate to the folder, you want to publish it on, and paste all the files from the repository.
Navigate to the subdomain for the folder, you pushed it on.
