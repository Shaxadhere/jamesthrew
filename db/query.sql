
/////////////////////////////////////
/////////////db_jamesthrew///////////
/////////////////////////////////////
create table tbl_Subsription
(
PK_ID int PRIMARY key AUTO_INCREMENT,
SubscriptionName varchar(50) not null,
Duration varchar(50) not null,
Price int not null,
Active bit not null,
Deleted bit not null
);

create table tbl_UserType
(
PK_ID int PRIMARY key AUTO_INCREMENT,
UserTypeName varchar(50) not null,
Active bit not null,
Deleted bit not null
);

create table tbl_User
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
FullName varchar(50) not null,
Email varchar(50) not null,
Password varchar(50) not null,
FK_Subscription int,
constraint FK_Subscription foreign key(FK_Subscription) references tbl_Subsription(PK_ID),
FK_UserType int,
constraint FK_UserType foreign key(FK_UserType) references tbl_UserType(PK_ID),
Active bit not null,
Deleted bit not null
);
create table tbl_Recipe
(
PK_ID int PRIMARY key AUTO_INCREMENT,
RecipeName varchar(50) not null,
Active bit not null,
Deleted bit not null
);

create table tbl_Ingredient
(
PK_ID int PRIMARY key AUTO_INCREMENT,
IngredientName varchar(50) not null,
FK_Recipe int,
constraint FK_Recipe foreign key(FK_Recipe) references tbl_Recipe(PK_ID),
Active bit not null,
Deleted bit not null
);

create table tbl_Steps
(
PK_ID int PRIMARY key AUTO_INCREMENT,
StepDescription varchar(1000) not null,
FK_RecipeSteps int,
constraint FK_RecipeSteps foreign key(FK_RecipeSteps) references tbl_Recipe(PK_ID),
Active bit not null,
Deleted bit not null
);

create table tbl_Feedback
(
PK_ID int PRIMARY key AUTO_INCREMENT,
FeedbackDescription varchar(1000),
FK_UserFeedback int,
constraint FK_UserFeedback foreign key(FK_UserFeedback) references tbl_User(PK_ID),
FK_RecipeFeedback int,
constraint FK_RecipeFeedback foreign key(FK_RecipeFeedback) references tbl_Recipe(PK_ID),
Active bit not null,
Deleted bit not null
);

create table tbl_Contest
(
PK_ID int PRIMARY key AUTO_INCREMENT,
ContestName varchar(50) not null,
ContestDescription varchar(1000) not null,
SubmissionDate date,
Active bit not null,
Deleted bit not null
);

create table tbl_Announcement
(
PK_ID int PRIMARY key AUTO_INCREMENT,
AnnouncementName varchar(50) not null,
AnnouncementDescription varchar(1000) not null,
FK_UserAnnouncement int,
constraint FK_UserAnnouncement foreign key(FK_UserAnnouncement) references tbl_User(PK_ID),
Active bit not null,
Deleted bit not null
);

create table tbl_Faqs
(
PK_ID int PRIMARY key AUTO_INCREMENT,
Question varchar(250) not null,
Answer varchar(1000) not null,
Active bit not null,
Deleted bit not null
);

create table tbl_Tips
(
PK_ID int PRIMARY key AUTO_INCREMENT,
TipName varchar(250) not null,
TipDescription varchar(1000) not null,
Active bit not null,
Deleted bit not null
);

create table tbl_EnrollContest
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
FK_UserEnrollContest int,
constraint FK_UserEnrollContest foreign key(FK_UserEnrollContest) references tbl_User(PK_ID),
FK_Contest int,
constraint FK_Contest foreign key(FK_Contest) references tbl_Contest(PK_ID),
Active bit not null,
Deleted bit not null
);

create table tbl_EnrollSubscription
(
PK_ID int PRIMARY key AUTO_INCREMENT,
FK_UserEnrollSubscription int,
constraint FK_UserEnrollSubscription foreign key(FK_UserEnrollSubscription) references tbl_User(PK_ID),
FK_SubscriptionEnroll int,
constraint FK_SubscriptionEnroll foreign key(FK_SubscriptionEnroll) references tbl_Subsription(PK_ID),
StartDate date,
EndDate date,
Active bit not null,
Deleted bit not null
)