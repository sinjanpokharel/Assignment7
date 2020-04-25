CREATE TABLE Exam
(
  Exam_No. INT(10) NOT NULL,
  Subject_Name VARCHAR(255) NOT NULL,
  Subject_No. INT(100) NOT NULL,
  PRIMARY KEY (Exam_No.)
);

CREATE TABLE Student
(
  Student_ID_number INT(10) NOT NULL,
  Student_Name VARCHAR(255) NOT NULL,
  Phone_number NUMERIC(10) NOT NULL,
  Address VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  PRIMARY KEY (Student_ID_number)
);

CREATE TABLE Attend
(
  Exam_No. INT(10) NOT NULL,
  Student_ID_number INT(10) NOT NULL,
  FOREIGN KEY (Exam_No.) REFERENCES Exam(Exam_No.),
  FOREIGN KEY (Student_ID_number) REFERENCES Student(Student_ID_number)
);

CREATE TABLE Report_Card
(
  Report_No. INT(10) NOT NULL,
  Score INT(100) NOT NULL,
  Subject VARCHAR(255) NOT NULL,
  Student_ID_number INT(10) NOT NULL,
  PRIMARY KEY (Report_No.)
);

CREATE TABLE Student_card
(
  Report_No. INT(10) NOT NULL,
  Student_ID_number INT(10) NOT NULL,
  FOREIGN KEY (Report_No.) REFERENCES Report_Card(Report_No.),
  FOREIGN KEY (Student_ID_number) REFERENCES Student(Student_ID_number)
);

CREATE TABLE Record
(
  Exam_No. INT(100) NOT NULL,
  Report_No. INT(10) NOT NULL,
  FOREIGN KEY (Exam_No.) REFERENCES Exam(Exam_No.),
  FOREIGN KEY (Report_No.) REFERENCES Report_Card(Report_No.)
);

insert into Exam_(1, "English",101)
insert into Student(1001, "Sinjan Pokharel", 0637811924, "thailand", "sinjanpokharel@gmail.com")
insert into Attend(1,1001)
insert into Report_Cards(5432, 85, "English", 1001)
insert into Student_Card(5432, 1001)
insert into record(1,5432)
