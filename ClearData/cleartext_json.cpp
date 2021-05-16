#include <iostream>
#include <ctime>
#include <stdio.h>
#include <string>
#include <cstring>
#include <fstream>

using namespace std;

int main( )
{
    time_t now = time(0);
    tm *ltm = localtime(&now);
    string newFileName = "../js/" + to_string(1900 + ltm->tm_year) + "_" + to_string(1 + ltm->tm_mon) + "_" +
        to_string(ltm->tm_mday) + "_" + to_string(ltm->tm_hour) + "_" + to_string(ltm->tm_min) +
        "_" + to_string(ltm->tm_sec) + "_text.json.old";
    string oldFileName ="../js/text.json";

    int n = newFileName.length();
    int o = oldFileName.length();
    char newName[n + 1];
    char oldName[o + 1];

    strcpy(newName, newFileName.c_str());
    strcpy(oldName, oldFileName.c_str());

    int result = rename(oldName, newName);
    cout << "Change json to old finish" << endl;

    ofstream MyFile(oldFileName);
    MyFile << "[]";
    MyFile.close();

    cout << "Create new one finish" << endl;


}
