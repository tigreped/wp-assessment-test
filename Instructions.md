# Instructions

This is a simple WordPress Child Theme. All the files you need to see and change are inside this theme.

You may access the site visiting http://localhost/wp-test.

If you need, the Dashboard can be accessed with user admin and password admin.

## The test

### The basics

a) First, fix the site.

b) After you fix the home page, click the Hello World post and fix it too

c) In the "Extra metadata" section, there is something you can and should optimize in the code. Look for useless functions, iterations or anything that could be done in a better way to improve performance


### The challanges


#### 1. Simple javascript

Using jQuery, CSS and some HTML, hide the "Extra Metadata" contents (only the metadatas, not the section title) 
and make it visible by clicking in the section title. 

Click should have a toggle behavior (click once, displays content, click again, hide content, and so on).


#### 2. WordPress Custom field

Create a new WordPress custom fiel (post meta) for the post and display it along with the other metadata under the "Extra metadata" section.

The field can have any name and its value is a simple string.


#### 3. Create a Class

Inside functions.php, create a small class to handle the "Extra metadata" section. It should receive the post ID and do everything necessary to output the same content. Remove any business logic from the template file and put it inside this class.
