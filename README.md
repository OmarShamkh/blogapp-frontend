
# Personal Blog App

This is a personal blog app that allows users to view, comment, and create blog posts.

## Features

* **Homepage:** The homepage displays a list of all blog posts. Non-authenticated users can view all blog posts and comments.
![Screenshot from 2023-07-22 19-07-19](https://github.com/OmarShamkh/blogapp-frontend/assets/44472968/7d8dab2c-96d5-4c81-89dd-4242319a1b60)



* **Commenting:** Only authenticated users can add, update, and delete comments.

  
![Screenshot from 2023-07-22 19-07-48](https://github.com/OmarShamkh/blogapp-frontend/assets/44472968/051120da-d656-4d25-948a-15539de30208)

  

* **User registration and login:** Users can register and login to the application.


![Screenshot from 2023-07-22 19-09-15](https://github.com/OmarShamkh/blogapp-frontend/assets/44472968/aa0e7b51-cc18-4c04-b3e1-967bd7ee2c3a)


## Running the application

**You have to run backend apis before** from this repo :
 https://github.com/OmarShamkh/blogapp-rest-apis.git 

```
git clone https://github.com/OmarShamkh/blogapp-frontend.git
```
 ```
 cd blogapp-frontend/blogapp
 ```
```
Create a new env variable in ".env.example" file: "BACKEND_URL = http://blog-backend:8000" , then rename the file to ".env".
```
  ```
 docker compose up
 ```

The application will be running at http://localhost:8001/blog.

**Thats all!**

