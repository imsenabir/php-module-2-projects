<?php
$contacts = [];

// Applying Function For Adding Contact
function addContact(array &$contacts, string $name, string $email, string $phone ): void{

$contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}
// Function to Display All Contacts
function displayContacts(array $contacts): void{
if (empty($contacts)){
echo "There Are No Contacts Available.\n";
}else {

    foreach ($contacts as $contact){
     echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
}
}
}
//Setting Up Terminal-Based Interface

# Setting Up The Loop
while (true){
echo "\nContact Management Menu:\n";
echo "\n1. Add Contact\n2. View Contacts\n3. Exit\n";
$choice = (int)readline("\nChoose An Option:");
if ($choice === 1){
$name = readline("\nEnter Name: ");
$email = readline("\nEnter Email: ");
$phone = readline("\nEnter Phone Number: ");
addContact($contacts, $name, $email, $phone);
echo "\n$name Added To Contacts.\n";
}elseif ($choice === 2){
    displayContacts($contacts);
}elseif ($choice === 3){
    echo "Thank You! Exiting...\n";
    break;
}else{
    echo "Invaild Choice. Please Try Again.\n";
}
}

?>



























