// let searchInput = document.getElementById('searchInput');

// searchInput.addEventListener('keyup', function (event) {
//     let searchQuery = event.target.value.toLowerCase(); 

//     let allNamesDOMCollection = document.getElementsByClassName('name')
//     for (let i = 0; i < allNamesDOMCollection.length; i++) {
//         const currentName = allNamesDOMCollection[i].textContent.toLowerCase();

//         if (currentName.includes(searchQuery)) {
//             console.log(currentName)
//             allNamesDOMCollection[i].style.display = 'block';
//         }
//         else {
//             allNamesDOMCollection[i].style.display = 'none';
//         }

//     }
// }) 



// Date Formate
function getMonthName(monthIndex) {
    const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    return monthNames[monthIndex];
}

function formatDate(inputValue) {
    // Convert the input value to a JavaScript Date object
    const dateObj = new Date(inputValue);

    // Get the day, month, and year from the Date object
    const day = String(dateObj.getDate()).padStart(2, '0');
    const monthIndex = dateObj.getMonth();
    const year = dateObj.getFullYear();

    // Get the month name using the month index
    const monthName = getMonthName(monthIndex);

    // Format the date as "DD Month YYYY" (e.g., 01 January 2023)
    const formattedDate = `${day}-${monthName}-${year}`;

    return formattedDate;
}

// Event listener to handle changes in the date input
const expireOdDate__Input = document.getElementById('expireOdDate__Input');
const expireOdDate__Span = document.getElementById('expireOdDate__Span');
expireOdDate__Input.addEventListener('change', function () {
    const inputValue = this.value;
    const formattedDate = formatDate(inputValue);
    expireOdDate__Span.innerText = formattedDate;
 
});


const joinedDate__Input = document.getElementById('joinedDate__Input');
const joinedDate__Span = document.getElementById('joinedDate__Span');
joinedDate__Input.addEventListener('change', function () {
    const inputValue = this.value;
    const formattedDate = formatDate(inputValue);
    joinedDate__Span.innerText = formattedDate;
  // Use the formatted date as needed
});