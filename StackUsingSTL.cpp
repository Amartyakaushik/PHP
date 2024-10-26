#include<iostream>
#include "stack"
#include "list"
using namespace std;
int main(){
    stack<char> st;

    st.push('a');
    st.push('b');
    st.push('c');
    st.push('d');
    st.push('e');

    cout<<st.top()<<endl;
    st.pop();
    cout<<"Is stack empty: "<< st.empty()<<endl;
    cout<<st.top()<<endl;
}

/*
LR =>
RR 		+ 	     LL
(anticlockwise)   	(clockwise)

RL =>
LL	     +   	RR  
(clockwise)	(anticlockwise) 

SR =>
RR , LL

DR => 
RL, LR


*/