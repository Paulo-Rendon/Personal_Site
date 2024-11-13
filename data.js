var projects = [
        {
            "projectName": "Pi Lights",
            "description": "I want to scrape the internet to track when a specific sports team scores, then have the program send a message to my respberry pi to flash a predetermined light pattern.",
            "summary":"A Python based program that utilizes multiple different programming techniques and coding practices to create a program that scrapes Google’s search results to provide updated scores to currently ongoing sports events with a delay of about 1 minute",
            "languages": [
                "Javascript",
                "Python"
            ],
            "links": {
                "GitHub": "https://github.com/Paulo-Rendon/PiTeamLights",
                "Trello": "https://trello.com/b/5lgZqZp4/raspberry-pi-lights"
            },
            "thumbnail": "images/piLights.png",
            "more_detail" : {
                "Why?": "I want to make a program that I can run from my raspberry pi that will give me a visual signal to keep me up to speed with any ongoing games that I cannot watch live for any reason. I want to create a type of visual display showing the live scores of each game I have running, as well as a short light show when a team scores between the last score update and the one before.",
                "BeautifulSoup": "This program utilizes the BeautifulSoup Python Library to help scrape Google’s live score results.",
                "Kivy": "This program utilizes the Kivy Python Library to help create the UI for the program."
            }
        },
        {
            "projectName": "Android Game",
            "description": "I am making a simple infinate runner game to better my understanding of Unity",
            "summary":"An infinite runner type game, built using Unity’s game engine and utilizing assets I’ve made personally in blender. The game will feature a controllable car that can move between three rails similar to Subway Surfers, and be set in a dessert based setting with references of important past events through the 1950s and 2000s.",
            "languages": [
                "C#"
            ],
            "links": {
                "GitHub": "https://github.com/Paulo-Rendon/InfiniteRunnerGame",
                "Trello": "https://trello.com/b/jywDNbmJ/game-dev"
    },
            "thumbnail": "images/android_project.png",
            "more_detail" : {
                "Why?":"I want this game to be my introduction to game development on a personal level, separate from school based projects. I choose this genre of game because it is immediately recognizable and is popular, but also quite simple of an overall concept and yet easy to build upon and make unique in its own right. This also doubles as a motivator for me to devote time to further developing my skills in asset building and working with software like Blender",
                "Unity's Game Engine" : "The game will run entirely through Unity, due to its free price tag and it’s ease of use",
                "Blender" : "This game features assets I have built personally using Blender, due to it’s free price tag and based on how powerful of a tool Blender can be"
            }
        },
        {
            "projectName": "Personal Website",
            "description": "I have created a personal website, the one you are on currently",
            "summary": "My personal website (this site) is where people can learn more about both the projects I have worked on in the past, as well as projects I want to pursue or are currently pursuing.",
            "languages": [
                "HTML",
                "CSS",
                "Javascript"
            ],
            "links": {
                "GitHub": "https://github.com/Paulo-Rendon/Personal_Site",
                "Trello": "https://trello.com/b/gyOoexVY/personal-website",
                "Figma": "https://www.figma.com/file/BVbkDqGunMEb2KpRO4PlTA/Untitled?node-id=0%3A1",
                "Personal Site": "https://www.paulorendon.com"
    },
            "thumbnail": "images/personal_site_screenshot.png",
            "more_detail" : {
                "Why?": "I want a place where people can get to learn more about me, in a way that is both professional and yet can be more personal than any Resume or Cover letter could portray. This website is still in it’s infancy stages while I continue to learn more about web development, but I hope to use this site as a way to express my expertise in some subjects, and my interest in others"
            }
        },
        {
            "projectName": "Research on PDF payload injection",
            "description": "This is a final project report for CS340. I made a tutorial like video on how to inject shell code into a PDF and show how it runs when opened on a Windows XP OS.",
            "summary":"A school project that involved a deep dive into PDF Payload injection, it’s dangers, and how such an attack works and is detected by most modern threat detection software today.",
            "languages": [
                "N/A"
            ],
            "links": {
                "YouTube": "https://www.youtube.com/watch?v=4DmPf02islI",
                "Report": "https://docs.google.com/document/d/1ZQMe53vBAuP4dFT1m3yWOk1Op1IsTUOLextLhh6-LtY/edit?usp=sharing"
                },
            "thumbnail": "images/PDF_Injection.png",
            "more_detail" : {
                "Why?" : "Besides being a school based project, I choose this topic because I have a personal interest in Cyber Security and wanted to have a better understanding of some of the most basic vulnerabilities of early OS systems, like this simple PDF injection",
                "VMWare" : "This project utilized VMWare to create a virtual Windows XP system that was meant to function as the target device of my Payload. I chose WindowsXP because it was a very popular OS of it’s time, and is considered far outdated when it comes to it’s security when compared to modern OSes of today. By using a WindowsXP OS as a target, it makes it more clear just how far we’ve come in the realm of Cyber Security and the importance on constant updates",
                "Metasploit" : "This program utilized Metasploit for creating the malicious PDF",
                "PDFStreamDump" : "This program utilized PDFSreamDump to look into the infested PDF at the code level, allowing us to better understand how this vulnerability works and what is actually happening behind the scenes when the PDF is opened"
            }
        },
        {
            "projectName": "Sudoku Checker",
            "description": "This program takes in a TXT file that uses whitespace to format integers in a Sudoku solution. The program then checks for the valididity of the solution provided by either forking children or using threads depending on the flags set when compiled. This project is for CS450 and so the code is not public to avoid plagerism",
            "summary":"A program I made for a school project with a team of 3 other software developers that uses parallel programming to scan a provided solved sudoku puzzle, and tells the user if the input is a valid Sudoku solution, or not.",
            "languages": [
                "C"
            ],
            "links": {
                },
            "thumbnail": "images/sudoku_code.png",
            "more_detail":{
                "Why?" : "This was a school based project that I decided to include because it was a more in depth use of parallel programming for me, and the concept itself was very interesting to me and helped me develop a strong understanding of parallel programming concepts and just how powerful of a tool parallel programming can be if used efficiently"
            }
        },
        {
            "projectName": "Streamline",
            "description": "A website created in collaberation with 3 other classmates for our senior capstone project. The website is meant to be used by children to find what streaming services have there favorite shows",
            "summary":"My Senior project for college, a website I made with a team of 3 other programmers that shows movies and TV shows as well as a description of the show, a trailer for the show, and what streaming services the show is available on. The entire website was designed to be child friendly, and for that reason all shows and movies shown on the website was child friendly and the UI was designed with children in mind",
            "languages": [
                "HTML",
                "Javascript",
                "CSS"
            ],
            "links": {
                "GitHub": "https://github.com/arniehayes/CS470",
                "Trello": "https://trello.com/b/mfqHNt2i/project-streamline"
                },
            "thumbnail": "images/streamline.png",
            "more_detail":{
                "Why?" : "We chose this website because of the boom of streaming services and their exclusive content has made it difficult for people to find their favorite shows and movies between all their subscription services. Our website is meant to mediate this problem, as well as allow the children of a family to have more of a say over what they watch, giving children a more strong sense of say in what they watch",
                "IMDB Database" : "This website utilizes the IMDB database to find movies and TV shows, as well as their summaries, ratings, and available streaming services. The database also allows filtering options, which we also utilize on the website to allow filtering based on genre, and/or streaming service",
                "YouTube API" : "This website utilizes the YouTube API to allow the streaming of trailers for the movies and TV shows in question"
            }
        },
        {
            "projectName": "SimWorld",
            "description": "A video game that three other classmates and I worked on for CS370. This course was right when COVID started so half of this project was done completely online using Zoom to communicate with my partners.",
            "summary": "A video game I helped make with a team of 3 other software developers for a school project. The game is loosely based on the popular game RimWorld. The game was worked on till the end of the school semester, where we ended development pretty early on in the game’s development cycle",
            "languages": [
                "C#"
            ],
            "links": {
                "GitHub": "https://github.com/Squirtle-Squad-CS370/370World",
                "Kanban Board": "https://docs.google.com/spreadsheets/d/1ImLBI8bQsUMFn7IJfHlj6Gxr2xxHwMh9dUvu5A68g_s/edit?usp=sharing"
    },
            "thumbnail": "images/Simworld.png",
            "more_detail":{
                "Why?" : "I want to include this project because this doubles as my first real introduction in game development, as well as working on a large scale project in a team setting. The game was more of a proof of concept for me and the team, and allowed us all to work together but still be able to contribute our own talents all throughout the game, and was my introduction to Unity, as well as team based concepts like SCRUM boards and different types of development cycles",
                "Unity Game Engine" : "This program utilized Unity’s gaming engine, specifically it’s 2D game engine"
            }
        },
        {
            "projectName": "Othello Game",
            "description": "A video game that I designed for CS215. The game framework was provided, my job was to make it unique by adding designs and music as well as writing the AI that will play against the user. This project was the beginning of our use of Visual Studios. I kept the code private to avoid any plagerism since it was a course final project",
            "summary":"A Othello game player, which we developed for a school project. It is a simple Othello PC game that has my own personal additions too, based on the Shrek films. The game also utilizes the ability to play against the computer, which utilized an AI I developed that uses something similar to a decision tree model to determine the most ideal next move",
            "languages": [
                "C++"
            ],
            "links": {
                "GitHub": "https://github.com/Paulo-Rendon/CS215_Game"
            },
            "thumbnail": "images/othello_game.png",
            "more_detail":{
                "Why?" : "I wanted to include this project because this was my first large scale program I wrote in C++. This is also my introduction to game development concepts like game states, as well as my introduction to AI development and I am proud of the amount of work I put into this project in the short amount of time I was allotted."
            }
        }
    ];