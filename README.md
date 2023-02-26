# H7DT-04-EX-01
## Web Programming 01 – Research Assignment | Online Student management system

During the pandemic period, according to health guidelines, it is not practical to gather more people in
one place. Because of this many fields have been disrupted. Among these disrupted fields, the education
field has taken a main position.

According to a research, education has to be continued under any condition or circumstance, otherwise
it would be directly harming the country’s work force. Even so, the government has failed to start a
proper education platform, since there was no such online system available. So, the government has
decided to conduct a competition between universities to find the best student management
application system and the project which receives first place will be implemented as a national project in
all schools. Further, software developers have to take the responsibility to develop easy, user-friendly
software.

Imagine you are also participating for this competition and are building a web application using your
knowledge of web programming. You can use PHP, CSS, Bootstrap, JS, jQuery and AJAX when you build
this software.

Main actors in this application are as follows:

1. Admin
2. Teacher
3. Student
4. Academic Officer

Main features of the actors are as follows:

Admin features,
- Login
- Manage Administration
- Send invitations to teachers for registration in the system
- Send invitations to academic officers for registration in the system
- Manage Teachers
- Manage Academic officers
- Manage Students
- Check results
- Update profile
- Log out

Note:
- When sending the invitation to the teachers, you have to send a username, password and an
automatically generated unique code to the teacher’s email. Also, the automatically generated
unique code must expire after single use.
- The admin has the right to assign teachers for a subject and for a grade in managing the
teacher’s section and Teachers should not be able to change them.
- Registration of the academic officer’s process should be same as the teacher’s registration
process


Teacher features:
- Log in
- Add lesson notes
- Add new assignments
- View submitted answer sheets
- Add assignment marks
- Update profile
- Log out

Note:
- When logging in to the system for the first time, teachers have to add the username, password
and the verification code sent by the admin.
- After that the teacher’s status should be changed as a verified teacher.
- When adding marks for the assignments, teachers should not release them directly to the
students. Teachers should submit the marks to the academic officer first.

Student features:
- Log in
- Download assignments
- View lesson notes
- Upload answers
- Update profile
- Log out 

Note:
- When logging in to the system for the first time, students have to add the verification code sent
by the academic officer to verify their account.
- After that, the student’s status should be changed as a verified student.

Academic Officers features:
- Log in
- Register students and send verification code to them
- View assignment marks released by the teacher
- Release marks to the students
- Update profile
- Log out

Note:
- When logging in to the system for the first time, academic officers also have to add the
username, password and the verification code sent by the admin.
- After that the student’s status should be changed as a verified academic officer.

Also consider these requirements:
- Only the admin should be able to update student’s grade.
- When students pass for the next grade, he/she has to pay an enrollment fee for using the
application.
- Remember, that the students have free access only for one month and they have to pay for it
after the trial period.
- Any student could be able to find any past lesson notes according to his grade and could not be
able to access other grade’s lessons.
- You can use any PHP related framework to develop this application if you want, also if you use
any other PHP related framework, you have to submit an introduction to that framework along
with the project documentation.

SUBMISSION CRITERIA
- Student should be able to implement the given scenario with mentioned technologies.
- Write comments (use //, or etc.) to describe your code fragments in each line.
- Submit Project documentation alone with your project attachment.
- Project Documentation, Database backup file(.sql) and Entity Relationship Diagram should separately attached with your submission.
