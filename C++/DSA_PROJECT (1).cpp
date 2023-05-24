#include<iostream>
#include <bits/stdc++.h>
#include <conio.h>
#include <string>
using namespace std;
struct Student {
    int IdNo;
    int Age;
    int Class;
    string Name;
    string Dept;
    string Sex;
    float Average;
   Student *next;
};
Student *head = NULL;
Student *current = NULL;
Student *t = NULL;
//t=temp;
int count_students = 0;
bool sorted = false;
int sorted_by;

   // Check Function to check that if
    // Record Already Exist or Not
bool check(int x)
{
    // Base Case
    if (head == NULL)
        return false;

    Student* t = new Student;
    t = head;

    // Traverse the Linked List
    while (t != NULL) {
        if (t->IdNo == x)
            return true;
        t = t->next;
    }

    return false;
}


    // Function to insert the record
void Insert_Record( int IdNo, int Age,int Class, string Name,string Sex,
                   string Dept, float Mark,float Average)
   {
    // if Record Already Exist

     if (check(IdNo))
     {
        cout << "Student with this "
             << "id no. already exist\n";

        return;

     }

    // Create new Node to Insert Record
    Student* t = new Student();
    t->IdNo = IdNo;
    t->Name = Name;
    t->Dept = Dept;
    t->Age = Age;
    t->Sex = Sex;
    t->Class = Class;
    t->Average = Average;
    t->next = NULL;

    // Insert at Begin
    if (head == NULL
        || (head->IdNo >= t->IdNo)) {
        t->next = head;
        head = t;
     }

     // Insert at middle or End
     else{
        Student* c = head;
        //c=new_student
        while (c->next != NULL
               && c->next->IdNo < t->IdNo) {
            c = c->next;
        }
        t->next = c->next;
        c->next = t;
     }


}
     // Function to search record for any
     // students Record with NAME
void Search_Record(string Name)
{
      // if head is NULL
    if (!head) {
        cout << "No such Record "
             << "Available\n";
        return;
    }

    // Otherwise
    else {
        Student* current = head;
        while (current) {
            if (current->Name == Name) {
                     cout<<"======================================================="<<endl;
                 cout << "ID Number\t"
                     << current->IdNo << endl;
                cout << "Name\t\t"
                     << current->Name << endl;

                  cout << "Age\t\t"
                     << current->Age << endl;
                     cout << "Sex\t\t"
                     << current->Sex << endl;
                     cout << "Class\t\t"
                     << current->Class << endl;
                     cout << "Average\t\t"
                     << current->Average << endl;
                return;
            }
            current = current->next;
        }

        if (current == NULL)
            cout << "No such Record "
                 << "Available\n";
    }
}
void Search_Record(int IdNo)
{
    // if head is NULL
    if (!head) {
        cout << "No such Record "
             << "Available\n";
        return;
    }

    // Otherwise
    else {
        Student* current = head;
        while (current) {
            if (current->IdNo == IdNo) {
                     cout<<"======================================================="<<endl;
                cout << "ID Number\t"
                     << current->IdNo << endl;
                cout << "Name\t\t"
                     << current->Name << endl;
                  cout << "Age\t\t"
                     << current->Age << endl;
                     cout << "Sex\t\t"
                     << current->Sex << endl;
                     cout << "Class\t\t"
                     << current->Class << endl;
                     cout << "Average\t\t"
                     << current->Average << endl;
                return;
            }
            current = current->next;
        }

        if (current == NULL)
            cout << "No such Record "
                 << "Available\n";
    }
}

void Search_Records(int Class)
{
    // if head is NULL
    if (!head) {
        cout << "No such Record "
             << "Available\n";
        return;
    }

    // Otherwise
    else {
        Student* current = head;
        while (current) {
            if (current->Class == Class) {
                    cout<<"======================================================="<<endl;
                cout << "ID Number\t"
                     << current->IdNo << endl;
                cout << "Name\t\t"
                     << current->Name << endl;

                  cout << "Age\t\t"
                     << current->Age << endl;
                     cout << "Sex\t\t"
                     << current->Sex << endl;
                     cout << "Class\t\t"
                     << current->Class << endl;
                     cout << "Average\t\t"
                     << current->Average << endl;
                return;
            }
            current = current->next;
        }

        if (current == NULL)
            cout << "No such Record "
                 << "Available\n";
    }
}

void Update( int IdNo)
{
    Student *current=head;
     Student* c = head;

    if(current!=NULL)
    {
        cout<<"Enter ID to be updated "<<endl;
        cin>>IdNo;
        if(current->IdNo==IdNo)
        {
            cout<<"record %d found! "<<IdNo<<endl;
            cout<<"                         \n";
             cout<<"Enter new Class:  ";
            cin>>current->Class;
            cout<<"Enter new IdNo:  ";
            cin>>current->IdNo;
            cout<<"Enter new name:  ";
            cin>>current->Name;
            cout<<"Enter new age:  ";
            cin>>current->Age;
            cout<<"Enter new Average:  ";
            cin>>current->Average;
            cout<<"Updation Successful!!"<<endl;
            return;
        }
        current=current->next;
         c->next = current;
    }
    cout<<" ID to be updated is not exit!"<<endl;
}
// Function to delete record students
// record with given roll number
// if it exist
int Delete_Record(int IdNo)
{
    Student* t = head;
    Student* current = NULL;

    // Deletion at Begin
    if (t != NULL
        && t->IdNo == IdNo) {
        head = t->next;
        delete t;
        system("cls");
    cout<<"\n  ID.NO "<<IdNo<<" is removed from the list Successfully\n";
    getch();
     return 0;
    }

    // Deletion Other than Begin
    while (t != NULL && t->IdNo != IdNo) {
        current = t;
        t = t->next;
    }
    if (t == NULL) {
        cout << "ID does not Exist\n";
        return -1;
        current->next = t->next;

        delete (t);
        system("cls");
    cout<<"\n    > "<<IdNo<<" is removed from the list Successfully\n";
    getch();
    return 0;
    }
}

// Function to display the Student's

   void show_record(){
    Student *current ;
Student *t;
    int number = 1;
    current = head;

    if(current == NULL){
        cout<<"    No students are added yet. ";
        return;
    }
cout<<"\t\tYour Data Record Are :\n";
cout<<"                                \n";
    cout<<left<<"    "<<setw(3)<<"No."<<setw(7)<<" | ID No. "<<setw(23)<<" | Full Name "<<setw(5)<<" | Class "<<setw(5)<<"| Age "<<setw(5)<<"   | Sex  "<<setw(5)<<" | Average";
    while(current != NULL){
        cout<<"\n  ---------------------------------------------------------------------------\n";
        cout<<left<<"    "<<setw(3)<<number++<<" | "<<setw(7)<<current->IdNo<<" | "<<setw(20)<<current->Name<<" | "<<setw(5)<<current->Class<<" | "<<setw(6)<<current->Age<<" | "<<setw(5)<<current->Sex<<" | "<<setw(4)<<current->Average;
        current = current->next;

    }

}


void reverse_list(){
        Student *current ;
Student *t;
    Student *last_of_sorted = NULL;//lastly sorted student in the list
    Student *behind_new = NULL;
    while(head != last_of_sorted){
        t = head;//the new student with greater gpa
        current = t->next;
        while(current != last_of_sorted ){
            t->next = current->next;
            current->next = t;
            if(t == head)
                head = current;
            else
                behind_new->next = current;

            behind_new = current;

            current = t->next;
        }
        last_of_sorted = t;
    }
}

void sort_student_list(int sort_by){
    //Sort BY 1=ID, 2=Average, 3=Class ,4=Name
    Student *least_of_sorted = NULL;//the least of sorted students
    Student *least_of_unsorted = NULL;

    while(head != least_of_sorted){
        t = head;//the new student with greater gpa
        current = t->next;
        while(current != least_of_sorted ){
            if((sort_by == 1 && (t->IdNo > current->IdNo)) ||
               (sort_by == 2 && (t->Average > current->Average)) ||
               (sort_by == 3 && (t->Class > current->Class)) ||
               (sort_by == 4 && (t->Name.compare(current->Name) > 0))
              ){
                t->next = current->next;
                current->next = t;
                if(t == head)
                    head = current;
                else
                    least_of_unsorted->next = current;

                least_of_unsorted = current;
            }
            else{
                least_of_unsorted = t;
                t = current;
            }

            current = t->next;
        }
        least_of_sorted = t;
    }
    sorted = true;
    system("cls");
    switch(sort_by){
        case 1:
            cout<<"\n\t\t  [ Sorted By ID ASC]\n";
             cout<<"                              \n";
            break;
        case 2:
            cout<<"\n\t\t  [ Sorted By Average ASC]\n";
             cout<<"                              \n";
            break;
        case 3:
            cout<<"\n\t\t  [ Sorted By Age ASC]\n";
             cout<<"                              \n";
            break;
        case 4:
            cout<<"\n\t\t  [ Sorted By Name ASC]\n";
             cout<<"                              \n";
            break;
    }
    sorted_by = sort_by;
     show_record();
}
bool isGreater(string name1, string name2){
    int length = (name1.length() < name2.length()) ? name1.length() : name2.length();
    for(int i=0; i<length; i++){
        if(tolower(name1[i]) > tolower(name2[i]))
            return true;
        else if(name1[i] < name2[i])
            return false;
    }
}

void sort_list_handler(){
    int sort_by;
    char Asc_sort, Desc_sort;
    if(!sorted){
        cout<<"\n  -----------------------------------------------------\n";
        cout<<"    Sort (y, n): ";
        cin>>Asc_sort;
        if(tolower(Asc_sort) != 'y'){
            sorted = false;
            cout<<"   </Enter any key to go back> ";
        }
        else{
cout<<    "\n  --------------------------------------"
                      "\n      Choose an option to Sort BY "
                      "\n  --------------------------------------"
                      "\n      1. ID "
                      "\n      2. Average "
                      "\n      3. Class "
                      "\n      4. Name "
                      "\n\n  --------------------------------------\n"
                      "\n  > ";
            cin>>sort_by;
            if(sort_by >= 1 && sort_by<=4)
                sort_student_list(sort_by);
            else{
                sorted = false;
                cout<<"   </Enter any key to go back> ";
                return;
            }

        }
    }
    else if(sorted){
        cout<<"\n  -----------------------------------------------------\n";
        cout<<"   Sort In DESC (y, n): ";
        cin>>Desc_sort;
        sorted = false;
        if(tolower(Desc_sort) == 'y'){
            reverse_list();
            system("cls");
            switch(sorted_by){
                case 1:
                    cout<<"\n\t\t  [ Sorted By ID DESC]\n";
                     cout<<"                              \n";
                    break;
                case 2:
                    cout<<"\n\t\t  [ Sorted By GPA DESC]\n";
                     cout<<"                              \n";
                    break;
                case 3:
                    cout<<"\n\t\t  [ Sorted By Age DESC]\n";
                     cout<<"                              \n";
                    break;
                case 4:
                    cout<<"\n\t\t  [ Sorted By Name DESC]\n";
                    cout<<"                              \n";
                    break;
    }
            show_record();
        }
        else{
            system("cls");
            cout<<endl;
            show_record();
            return;
        }
    }
}

 // Driver code
int main()
{
   // head = NULL;
    string Name,password,user,confirm_p,Sex,Dept;
    int Choice,Class,Age,n,IdNo,sort_by;
    float Mark,Average,Av;
    int sum=0;

        cout<<"                                                            \n"
            <<      "\t*===================================================*\n"
           <<       "\t*                                                   *\n"
           <<       "\t*      HARAMAYA UNIVERSITY                          *\n"
           <<       "\t*                                                   *\n"
           <<       "\t*               MODEL SCHOOL                        *\n"
           <<       "\t*                                                   *\n"
           <<       "\t*===================================================*\n";
       cout<<"     \t\tLOGIN PAGE                  "<<endl;
    cout<<"                                     "<<endl;
    cout <<"      User name :"<<"\t       ";
    cin>>user;
    cout<<"      Password :"<<"\t\t ";
    cin>>password;
    system("cls");
    if(password=="if123")
    {

    // Menu-driven program
    while (true) {
cout<<"                                                                              \n"
    <<"      #########################################################################\n"
    <<"      #                                                                       #\n"
    <<"      #                                                                       #\n"
    <<"      #                                                                       #\n"
    <<"      #                    Welcome to Student Management Record System        #\n"
    <<"      #                                                                       # \n"
    <<"      #                                                                       # \n"
    <<"      #             MENU LIST:                                                #\n"
    <<"      #                                                                       #\n"
    <<"      #  Press->                                                              #\n"
    <<"      #           1: to create a new Record                                   #\n"
    <<"      #                                                                       #\n"
    <<"      #           2: to delete a student record                               #\n"
    <<"      #                                                                       #\n"
    <<"      #           3: to Search a Student Record                               #\n"
    <<"      #                                                                       #\n"
    <<"      #           4: to view all students record                              #\n"
    <<"      #                                                                       #\n"
    <<"      #           5:to update student record                                  #\n"
    <<"      #                                                                       #\n"
    <<"      #           6:to sort all students record                               #\n"
    <<"      #                                                                       #\n"
    <<"      #           7: to Exit                                                  #\n"
    <<"      #                                                                       #\n"
    <<"      #                                                                       #\n"
    <<"      #                                                                       #\n"
    <<"      #########################################################################"<<endl;
        cout << "\nEnter your Choice: ";


        // Enter Choice
cin >> Choice;

    if (Choice==1)
       {

        cout<<"Choose Class you want to record (9-12)?"<<endl;
            cin>>Class;
                system("cls");


        switch(Class)
            {

case 9:


      cout<<"Enter name of Student \t";
      cin>>Name;
      cout<<"Enter ID of Student \t";
      cin>>IdNo;
      if (check(IdNo))
      {


        break;
     }


      cout<<"Enter Age of Student \t";
      cin>>Age;
      cout<<"Enter Sex of Student (M/F)\t";
      cin>>Sex;
      cout<<"The Student is Enrolled with 12 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.A/O\n"
        <<"2.ENG                             8.AMR\n"
        <<"3.PHY                             9.ICT \n"
        <<"4.CHEM                            10.BIO \n"
        <<"5.HIS                             11.CIV \n"
        <<"6.GEO                             12.HPE \n";
        getch();
     cout<<"After taking all this subject insert each Mark with subject code "<<endl;

        sum = 0;
        Average = 0;
	    for(int i=1;i<=12;i++)
        {
            cout<<"Enter Mark of subj.code "<<i<<"\t";
             cin>>Mark;
            sum+=Mark;

            }
            cin.ignore();
            Average=sum/12;
        cout<<"\tThe Student Information Recorded Successfully"<<endl;
        getch();
           break;

case 10:

            cout<<"Enter Sex of Student (M/F)\t";
            cin>>Sex;
    if(Sex=="M")
    {
        cout<<"Enter Average he Scored in grade 9th \t";
        cin>>Av;
        if(Av>100)
        {
            cout<<"Average not greater than 100"<<endl;
        }
        else if(Av>=58)
        {

          cout<<"Enter name of Student \t";
            cin>>Name;

          cout<<"Enter ID of Student \t";
            cin>>IdNo;
            if (check(IdNo))
      {

        break;
     }
          cout<<"Enter Age of Student \t";
            cin>>Age;
          cout<<"The Student is Enrolled with 12 Subject: \n"
        <<"Those coded according to the following \n"
        <<"1.MATH                            7.A/O\n"
        <<"2.ENG                             8.AMR\n"
        <<"3.PHY                             9.ICT \n"
        <<"4.CHEM                            10.BIO \n"
        <<"5.HIS                             11.CIV \n"
        <<"6.GEO                             12.HPE \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

         sum = 0;
         Average = 0;
         for(int i=1;i<=12;i++)
         {
            cout<<"Enter Mark of subj.code "<<i<<"\t";
            cin>>Mark;
                sum+=Mark;
            }
             cin.ignore();
            Average=sum/12;

         cout<<"\tThe Student Information Recorded Successfully"<<endl;

          }
         else
         {
            cout<<"The Student Average is Less than  Pass Mark"<<endl;
         }
    }
    else if(Sex=="F")
      {
        cout<<"Enter Average she Scored in grade 9th \t";
        cin>>Av;
        if(Av>100)
        {
            cout<<"Average not greater than 100"<<endl;
        }
        else if(Av>=54)
        {

          cout<<"Enter name of Student \t";
            cin>>Name;

          cout<<"Enter ID of Student \t";
            cin>>IdNo;
            if (check(IdNo))
      {

        break;
     }
          cout<<"Enter Age of Student \t";
            cin>>Age;
          cout<<"The Student is Enrolled with 12 Subject:\n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.A/O\n"
        <<"2.ENG                             8.AMR\n"
        <<"3.PHY                             9.ICT \n"
        <<"4.CHEM                            10.BIO \n"
        <<"5.HIS                             11.CIV \n"
        <<"6.GEO                             12.HPE \n";
        getch();
          cout<<"After taking all this subject insert each Mark with subject code "<<endl;

          sum = 0;
          Average = 0;
        for(int i=1;i<=12;i++)
        {
            cout<<"Enter Mark of subj.code "<<i<<"\t";
            cin>>Mark;
                sum+=Mark;
            }
             cin.ignore();
            Average=sum/12;

       cout<<"\tThe Student Information Recorded Successfully"<<endl;
       getch();

       }
       else
        {
            cout<<"The Student Average is Less than  Pass Mark"<<endl;
        }

       }
       else
        {
        cout<<"Please insert Sex for male (M) or for Female (F)"<<endl;
        }
                break;

case 11:

                    cout<<"Enter Sex of Student (M/F)\t";
        cin>>Sex;
        if(Sex=="M")
        {
        cout<<"Enter Average he Scored in grade 10th \t";
        cin>>Average;
        if(Average>100)
        {
            cout<<"Average not greater than 100"<<endl;
        }
        else if(Average>=58)
        {

            cout<<" Enter Dept/Field of Student (Natural/Social) \t";
            cin>>Dept;
            if(Dept=="Natural")
            {
               cout<<"Enter name of Student \t";
               cin>>Name;

               cout<<"Enter ID of Student \t";
               cin>>IdNo;
               if (check(IdNo))
      {

        break;
     }
               cout<<"Enter Age of Student \t";
               cin>>Age;
        cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.PHY                             9.HPE \n"
        <<"4.CHEM                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.BIO \n                                     \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

          sum = 0;
          Average = 0;
          for(int i=1;i<=9;i++)
           {
            cout<<"Enter Mark of subj.code "<<i<<"\t";
            cin>>Mark;


                            sum+=Mark;
            }
             cin.ignore();
            Average=sum/9;

            cout<<"\tThe Student Information Recorded Successfully"<<endl;
            getch();

            }
            else if(Dept=="Social")
            {
                 cout<<"Enter name of Student \t";
                 cin>>Name;

                 cout<<"Enter ID of Student \t";
                 cin>>IdNo;
                 if (check(IdNo))
      {

        break;
     }
                 cout<<"Enter Age of Student \t";
                 cin>>Age;
                 cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.HIS                             9.HPE \n"
        <<"4.GEO                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.GENERAL BUSSINESS                                      \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

           sum = 0;
           Average = 0;
           for(int i=1;i<=9;i++)
           {
            cout<<"Enter Mark of subj.code "<<i<<"\t";
            cin>>Mark;


                            sum+=Mark;
            }
             cin.ignore();
             Average=sum/9;

             cout<<"The Student Information Recorded Successfully"<<endl;

            }
            else
                {
                    cout<<"Please inter correct Dept  (Natural/Social) with correct spelling "<<endl;
                }


            }
             else
            {
             cout<<"The Student Average is Less than  Pass Mark"<<endl;
             }
            }
            else if(Sex=="F")
             {
              cout<<"Enter Average he Scored in grade 10th \t";
              cin>>Average;
              if(Average>100)
                {
                 cout<<"Average not greater than 100"<<endl;
                }
              else if(Average>=54)
                {
                cout<<" Enter Dept/Field of Student (Natural/Social) \t";
                cin>>Dept;
                if(Dept=="Natural")
                  {
                   cout<<"Enter name of Student \t";
                   cin>>Name;

                   cout<<"Enter ID of Student \t";
                   cin>>IdNo;
                   if (check(IdNo))
      {

        break;
     }
                   cout<<"Enter Age of Student \t";
                   cin>>Age;
                   cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.PHY                             9.HPE \n"
        <<"4.CHEM                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.BIO \n                                     \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

            sum = 0;
            Average = 0;
            for(int i=1;i<=9;i++)
               {
                cout<<"Enter Mark of subj.code "<<i<<"\t";
                cin>>Mark;


                            sum+=Mark;
               }
                cin.ignore();
                Average=sum/9;

                cout<<"The Student Information Recorded Successfully"<<endl;

             }
              else if(Dept=="Social")
                 {
                   cout<<"Enter name of Student \t";
                   cin>>Name;
                   cout<<"Enter ID of Student \t";
                   cin>>IdNo;
                   if (check(IdNo))
      {

        break;
     }
                   cout<<"Enter Age of Student \t";
                   cin>>Age;
                   cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.PHY                             9.HPE \n"
        <<"4.CHEM                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.BIO \n                                     \n";
        getch();
                   cout<<"After taking all this subject insert each Mark with subject code "<<endl;

              sum = 0;
              Average = 0;
              for(int i=1;i<=9;i++)
                 {
                   cout<<"Enter Mark of subj.code "<<i<<"\t";
                   cin>>Mark;


                            sum+=Mark;
                 }
                  cin.ignore();
                  Average=sum/9;


                  cout<<"The Student Information Recorded Successfully"<<endl;

                }
                else
                   {
                    cout<<"Please inter correct Dept  (Natural/Social) with correct spelling "<<endl;
                   }
              }
            else
              {
                cout<<"The Student Average is Less than  Pass Mark"<<endl;
              }
            }
            else
              {
               cout<<"Please insert Sex for male (M) or for Female (F)"<<endl;
              }

               cin.ignore();
               break;

case 12:

               cout<<"Enter Sex of Student (M/F)\t";
               cin>>Sex;
               if(Sex=="M")
                 {
                    cout<<"Enter Average he Scored in grade 11th \t";
                    cin>>Average;
                    if(Average>100)
                       {
                         cout<<"Average not greater than 100"<<endl;
                       }
                    else if(Average>=58)
                       {
                        cout<<" Enter Dept/Field of Student (Natural/Social) \t";
                        cin>>Dept;
                        if(Dept=="Natural")
                          {
                            cout<<"Enter name of Student \t";
                            cin>>Name;

                            cout<<"Enter ID of Student \t";
                            cin>>IdNo;
                            if (check(IdNo))
      {

        break;
     }
                            cout<<"Enter Age of Student \t";
                            cin>>Age;
                            cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.PHY                             9.HPE \n"
        <<"4.CHEM                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.BIO \n                                     \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

              sum = 0;
              Average = 0;
              for(int i=1;i<=9;i++)
                  {
                   cout<<"Enter Mark of subj.code "<<i<<"\t";
                   cin>>Mark;


                       sum+=Mark;
                  }
                    cin.ignore();
                    Average=sum/9;

               cout<<"The Student Information Recorded Successfully"<<endl;

               }
            else if(Dept=="Social")
              {
                 cout<<"Enter name of Student \t";
                 cin>>Name;

                 cout<<"Enter ID of Student \t";
                 cin>>IdNo;
                 if (check(IdNo))
      {

        break;
     }
                 cout<<"Enter Age of Student \t";
                 cin>>Age;
                 cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.HIS                             9.HPE \n"
        <<"4.GEO                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.GENERAL BUSSINESS                                      \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

            sum = 0;
            Average = 0;
            for(int i=1;i<=9;i++)
               {
                cout<<"Enter Mark of subj.code "<<i<<"\t";
                cin>>Mark;


                       sum+=Mark;
               }
                cin.ignore();
                Average=sum/9;

        cout<<"The Student Information Recorded Successfully"<<endl;

            }
            else
                {
                    cout<<"Please inter correct Dept  (Natural/Social) with correct spelling "<<endl;
                }
            }
        else
           {
            cout<<"The Student Average is Less than  Pass Mark"<<endl;
           }
          }
        else if(Sex=="F")
          {
            cout<<"Enter Average she Scored in grade 11th \t";
            cin>>Average;
            if(Average>100)
              {
                cout<<"Average not greater than 100"<<endl;
              }
            else if(Average>=54)
              {
                cout<<" Enter Dept/Field of Student (Natural/Social) \t";
                cin>>Dept;
                if(Dept=="Natural")
                    {
                     cout<<"Enter name of Student \t";
                     cin>>Name;

                     cout<<"Enter ID of Student \t";
                     cin>>IdNo;
                     if (check(IdNo))
      {

        break;
     }
                     cout<<"Enter Age of Student \t";
                     cin>>Age;
        cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.PHY                             9.HPE \n"
        <<"4.CHEM                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.BIO \n                                     \n";
        getch();
        cout<<"After taking all this subject insert each Mark with subject code "<<endl;

            sum = 0;
            Average = 0;
            for(int i=1;i<=9;i++)
               {
                 cout<<"Enter Mark of subj.code "<<i<<"\t";
                 cin>>Mark;


                       sum+=Mark;
               }
                 cin.ignore();
                 Average=sum/9;

                 cout<<"\tThe Student Information Recorded Successfully"<<endl;
                 getch();

               }
            else if(Dept=="Social")
               {
                 cout<<"Enter name of Student \t";
                 cin>>Name;

                 cout<<"Enter ID of Student \t";
                 cin>>IdNo;
                 if (check(IdNo))
      {

        break;
     }
                 cout<<"Enter Age of Student \t";
                 cin>>Age;
        cout<<"The Student is Enrolled with 9 Subject: \n"
        <<"Those Subject are coded according to the following \n"
        <<"1.MATH                            7.ICT \n"
        <<"2.ENG                             8.CIV \n"
        <<"3.HIS                             9.HPE \n"
        <<"4.GEO                                   \n"
        <<"5.A/O or AMR                                \n"
        <<"6.GENERAL BUSSINESS                                      \n";
        getch();
        cout<<"\tAfter taking all this subject insert each Mark with subject code "<<endl;

              sum = 0;
              Average = 0;
              for(int i=1;i<=9;i++)
                 {
                   cout<<"Enter Mark of subj.code "<<i<<"\t";
                   cin>>Mark;


                       sum+=Mark;
                  }
                   cin.ignore();
                   Average=sum/9;

                   cout<<"\tThe Student Information Recorded Successfully"<<endl;
                   getch();

                }
            else
                {
                    cout<<"Please inter correct Dept  (Natural/Social) with correct spelling "<<endl;
                }


               }
            else
                {
                 cout<<"The Student Average is Less than  Pass Mark"<<endl;
                }
             }
           else
               {
                cout<<"Please insert Sex for male (M) or for Female (F)"<<endl;
               }

                break;


                default:
                cout<<"You inter Wrong Class"<<endl;
                break;
             }


                Insert_Record(IdNo, Age,Class,Name, Sex, Dept, Mark, Average);

             }

           else if (Choice == 2) {

               cout << "Enter Id Number of Student whose "
                       "record is to be deleted\n";
               cin >> IdNo;
               Delete_Record(IdNo);
            }
           else if (Choice == 3) {

               cout << "Choose -->\n"
                    <<"\t  1.Search by NAME\n"
                    <<"\t  2.Search by ID No\n"
                    <<"\t  3.Search by CLASS\n";
               cin  >> Choice;
               if(Choice==1)
                 {
                   cout<<"Enter Name of Student whose record to be Searched\n";
                   cin>>Name;
                   Search_Record(Name);
                   getch();

                 }
               else if(Choice==2)
                 {
                   cout<<"Enter ID of Student whose record to be Searched\n";
                   cin>>IdNo;
                   Search_Record(IdNo);
                   getch();

                 }
               else if(Choice==3)
                 {
                    cout<<"Enter CLASS of Student whose record to be Searched\n";
                    cin>>Class;
                    Search_Records(Class);
                    getch();

                 }
               else{
                    cout<<"You Entered Wrong choose\n";
                   }
                 }
               else if (Choice == 4) {
                      show_record();
                      getch();
                }

               else if(Choice==5)
                {
                 Update(IdNo);
                 getch();
                }
               else if(Choice==6)
                 {
                   sort_list_handler();
                  }
               else if (Choice == 7) {
               exit(0);
                 }
               else {
                     cout << "Invalid Choice "
                          << "Try Again\n";
                    }
                   }

                  }
               else{
                     cout<<"You Entered wrong Password Try Again."<<endl;
                   }

        return 0;
  }


