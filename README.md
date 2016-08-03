If there's any issue you are facing in setting up DevJournal theme, I'm there for you. Just create an issue in this repository (http://github.com/hemangsk/DevJournal), (https://help.github.com/articles/creating-an-issue/) and I'll get back to you asap. :smile: :+1:<br>

![alt-tag](https://farm8.staticflickr.com/7062/26385542743_1c7e6b8d9e_o.png) 

![alt-tag](https://farm8.staticflickr.com/7320/26385629583_eac6861c48_o.png)


![alt-tag](https://farm8.staticflickr.com/7300/26895705412_d6365b9a14_o.png)



![alt-tag](https://farm8.staticflickr.com/7370/26956762406_cbfa7a2139_o.png)

#### To create a new post :sunglasses:

- Create a .markdown file inside _posts folder.
- Name the file according to the standard jekyll format.
```
   2016-03-30-i-love-design.markdown
```
- Write the Front Matter and content in the file.
    ```
          ---
          layout: post | default | page
          title:  String Post Title
          date:   Time Stamp
          categories: String | Array of Strings Category / Categories 
          ---
    ```
    
    ```
        ---
        layout: post
        title:  "The One with the Blackout"
        date:   2016-03-30 19:45:31 +0530
        categories: ["life", "friends"]
        ---
    ```  


![alt-tag](https://farm8.staticflickr.com/7660/26895189602_170af0a783_o.png)
![alt-tag](https://farm8.staticflickr.com/7594/26385450183_37116c6d32_o.png)


####Create new pages, such a breeze! :smile:
- Create a .md file in the root directory.
- Name the file with the desired page link name.
```
   about.md
```
```
   design.md
```
- Write the Front Matter and content in the file.
```
          ---
          layout: page
          title: String Title of the webpage
          permalink: / String / Permalink for the webpage
          tagline: String Optional DevJournal Feature : Tagline for the page
          ---
```      
```
        ---
        layout: page
        title:  "Science"
        permalink:   /science/
        tagline : "Humanity is overrated."
        ---
```      

![alt-tag](https://farm8.staticflickr.com/7124/26895188812_65218d8652_o.png)


That's all folks.

>Super Flexible, Minimal, Text Based jekyll theme for the kickass geek :sunglasses:

####It'd be really cool if you,<br>
1.  Create some new feature and would like to integrate in DevJournal. Pull requests are most invited.
2.  Open issues if you find bugs.
3.  Just so you know, the license type is MIT.


>Its' all about being community driven.  :bus: :bus: :dash:

Have a great day!  :smile: :smile: :smiley:

