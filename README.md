
# Personal Blog App

This is a personal blog app that allows users to view, comment, and create blog posts.

## Features

* **Homepage:** The homepage displays a list of all blog posts. Non-authenticated users can view all blog posts and comments.

![209350249-5671bfa1-8a9c-447b-a169-5dbc515cefe4](https://github.com/OmarShamkh/blogapp-frontend/assets/44472968/7702134d-63ab-4be7-9558-682293df5a13)


* **Commenting:** Only authenticated users can add, update, and delete comments.

  
  ![post](https://user-images.githubusercontent.com/44472968/209350595-b7f5877c-e25f-4ff7-aca0-9c07d0b9c90c.png)

  

* **User registration and login:** Users can register and login to the application.

  ![user-comment](https://user-images.githubusercontent.com/44472968/209350839-281ff54b-4cc3-49ae-8bc8-d2e47eb22d13.png)


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

## Demo
[My_Blog.webm](https://user-images.githubusercontent.com/44472968/209352803-47a12613-409b-4472-8ee5-00aa43e7714b.webm)

