#include<iostream>
using namespace std;

int main() {


    int x = 1;
    // int y = 2;
    int *y = &x;

    x = 3;
    cout<< y << '\n';

    return 0;
}