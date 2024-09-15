create table Player(

PlayerID CHAR(50) NOT NULL PRIMARY KEY,
MatchesPlayed int, 
TotalDeaths int,
PilotName Varchar(255), 
Email Varchar (255) --Ensure emails are varcharts @b2af
Passwords varchar (255) --double check on masking other emails. 
FK_TeamID Varchar(255),  
Foreign key (FK_TeamID) References Team(TeamID), FK_GameID int, 
foreign key (FK_GameID) references Game(GameID), FK_SeasonID int, 
Foreign key (FK_SeasonID) references Season(SeasonID), FK_LevelRating int,
foreign key (FK_LevelRating) references Placement(LevelRating), TotalKills int);


 
CREATE TABLE Placement 
(
LevelRating int not null Primary Key, 
Platinum varchar(255),
Gold varchar(255), 
Silver varchar(255), 
Bronze varchar (255), 
FK_TeamID Varchar(255), 
Foreign key (FK_TeamID) References Team(TeamID),
FK_PlayerID varchar(255), 
Foreign key (FK_PlayerID) references Player(PlayerID)
);

Create table Team
(
TEAMID VARCHAR(255) not null Primary Key, 
TEAMWINS INT, 
TEAMLOSSES INT,
FK_PlayerID varchar(255), Foreign key (FK_PlayerID) references Player(PlayerID), 
FK_TeamID Varchar(255), Foreign key (FK_TeamID) References Team(TeamID),
FK_GameID int, foreign key(FK_GameID) references Game(GameID), 
FK_SeasonID int, Foreign key (FK_SeasonID) references Season(SeasonID)

);

CREATE TABLE Season
(
SeasonID VARCHAR (255) int not null primary key, 
StartDate date, 
EndDate date, 
SeasonName varchar(255), 
YearEnd date not Null,
FK_PlayerID varchar(255), Foreign key (FK_PlayerID) references Player(PlayerID), 
FK_TeamID Varchar(255), Foreign key (FK_TeamID) References Team(TeamID)
);




Create Table Game
(
GameID int not null primary key, 
oneVone int, 
Teams varchar(255), 
FK_GameID int,
Foreign key (FK_PlayerID) references Player(PlayerID), FK_TeamID Varchar(255), 
Foreign key (FK_TeamID) References Team(TeamID));





create Index ind_SeasonName
ON Season(SeasonName);

create Index Ind_FK_TeamID
ON Team(FK_TeamID);

Create index ind_FK_PlayerID
on Team(FK_PLayerID);

create index ind_FK_GameID
on Player(FK_GameID);

create index ind_FK_SeasonID
On Player(FK_SeasonID);

Create index ind_FK_LEVELRATING
on player(FK_LEVELRATING);

