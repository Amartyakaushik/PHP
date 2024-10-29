#include<iostream>

using namespace std;

struct node{

    int data;

    struct node* next;



};







struct node* createNode(int value){

    struct node* newNode = (struct node*)malloc(sizeof(struct node));

    newNode -> data = value;

    newNode -> next = NULL;

    return newNode;

}



struct node* insertAtBeg(struct node* head, int value){

    struct node* newNode = createNode(value);

    newNode -> next = head;

    head = newNode;

    return newNode;

}

struct node* insertAtEnd(struct node* head, int value){

    struct node* newNode = createNode(value);

    if(head == NULL){

        return newNode;

    }



    struct node* last = head;

    while(last -> next != NULL){

        last = last -> next;

    }

    last -> next = newNode;

    return head;

}



struct node* insertAtAnyPoint(struct node* head, int value){

    struct node* newNode = createNode(value);

    

}



void printList(struct node* head){

    struct node* current = head;

    while(current != NULL){

        cout<<current->data<<" ";

        current = current-> next;

    }cout<<endl;

}



int main(){

    struct node* head = createNode(1);

    struct node* node1 = createNode(11);

    struct node* node2 = createNode(111);

    // cout<<head-> data<<endl;

    // cout<<head-> next<<endl;



    // cout<<node1-> data<<endl;

    // cout<<node1-> next<<endl;



    // cout<<node2-> data<<endl;

    // cout<<node2-> next<<endl;



    head = insertAtBeg(head,4);

    head = insertAtBeg(head,54);

    head = insertAtBeg(head,644);

    printList(head);



    head = insertAtEnd(head,11);

    head = insertAtEnd(head,222);

    head = insertAtEnd(head,333);

    printList(head);



    return 0;

}
