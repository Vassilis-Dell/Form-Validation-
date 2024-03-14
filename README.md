Programming part (70%)
(20%) Use the https://layoutit.com/build tool to create a responsive landing page based on bootstrap framework. You are asked to create the homepage. The interface must contain at least header with logo, menu, carousel slider,
photos and texts with realistic content.
In the menu there should be at least two menu items. One that one referring to the home page and one referring to an internal page where the form will exist according to the following instructions.
The form can be e.g. an expression of interest form, a form purchase form, registration form, etc.
Necessary details of each form): 
The form must contain at least :
- 5 textboxes with the corresponding text , e.g. name/last name, tel. email,
age etc.
- 1 check box accepting terms of use
- Form data will be stored in a database,
with appropriate .php files (see B. required in
below)

Translated with DeepL.com (free version)
To validate the form data from the browser's side, JavaScript should be used. The form should define the mandatory fields that need to be filled out and validated for correctness. Best practices for form validation should be employed. The format of form data validation should be as follows:
a. When any of the entered data is not valid, the form will display the appropriate icon and message. When it becomes valid, an appropriate icon will appear, and the message will disappear. For example, in the case of entering an email address.
![image](https://github.com/Vassilis-Dell/Form-Validation-/assets/158286953/572ccf44-2834-4ff2-9955-5fe3e2e4458f)
![image](https://github.com/Vassilis-Dell/Form-Validation-/assets/158286953/4c54d655-3e9a-42f2-87f5-09c302dd3b0e)

PHP &MySQL
A. (10%) The form should communicate and transfer data to a
.php file on the server side , where a REQUIRED
operation on this data :
i. In case of numeric data transfer usual arithmetic
operation (sum/product, average, greater/less etc.)
ii. in the case of transfer of character data, a standard operation, e.g.
(ii) ii.
B. (10%) Write a set of (4) .php files that will do the following :
i. Create the appropriate database
ii. create a suitable table to store data of the
form
iii. insert appropriate records into the table
iv. Find/Update/Delete records with criteria
Necessary use of MySQL(queries) within the php files.
C. (10%)
Create a database using MySQL to record
user data of a fictional social networking site. Η
database will include three tables: `Users`, `Friends`, and
`Posts`.
1. Users table:
- Columns:
- `user_id` (Auto-incrementing number, Primary Key).
- `username` (User name).
- `password` (Password).
- `email` (Email address)
2. Friends table:
- Columns:
- `friendship_id` (Auto-incrementing number, Primary Key)
- `user_id` (Foreign Key to the Users table).
- - `friend_id` (Foreign Key to the Users table, represents the
the user's friend)
3. Posts table:
- Columns:
- `post_id` (Auto-incrementing number, Primary Key).
- `user_id` (Foreign Key to the Users table).
- `content` (Content of the post)
Create the tables and enter some data in order to
test the database.
Record in a *.txt file in order all the commands you gave.

