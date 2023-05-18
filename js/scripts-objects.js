// window.onload = () => {

//     const objectDetailsContainer = document.getElementById('event-details');

//     const eventsArray = [
//         { id: 1, name: "Event 1" },
//         { id: 2, name: "Event 2" },
//         { id: 3, name: "Event 3" },
//     ];

//     function getObjectById(eventsArray, id) {
//         return eventsArray.find(event => event.id === id);
//     }
    
//     const event = getObjectById(eventsArray, 1);

//     const objectElement = document.createElement('div');
//     objectElement.classList.add('eventsArray');

//     const objectName = document.createElement('h2');
//     objectName.textContent = event.name;
//     objectElement.appendChild(objectName);

//     const objectId = document.createElement('p');
//     objectId.textContent = `ID: ${event.id}`;
//     objectElement.appendChild(objectId);  
  
//     // Append the object element to the object-details container
//     objectDetailsContainer.appendChild(objectElement);
    
// }   

window.onload = () => {
    const objectDetailsContainer = document.getElementById('event-details');

    const eventsArray = [
        { id: 1, name: "Community Run", date: "27 February, 2023", location: "School", participants: 14, rating: 4.5, activity: "Running" },
        { id: 2, name: "Football Match", date: "6 March, 2023", location: "Tel-Aviv`s Sportek", participants: 22, rating: 4.2, activity: "Football Match" },
        { id: 3, name: "David`s Workout", date: "12 January, 2023", location: "Gym", participants: 15, rating: 4.8, activity: "Full Body Workout" }
    ];

    function getObjectById(eventsArray, id) {
        return eventsArray.find(event => event.id === id);
    }
    
    const event = getObjectById(eventsArray, 1);

    const objectElement = document.createElement('div');
    objectElement.classList.add('eventsArray');

    const objectName = document.createElement('h2');
    objectName.textContent = event.name;
    objectElement.appendChild(objectName);

    const objectId = document.createElement('p');
    objectId.textContent = `ID: ${event.id}`;
    objectElement.appendChild(objectId);

    const objectDate = document.createElement('p');
    objectDate.textContent = `Date: ${event.date}`;
    objectElement.appendChild(objectDate);

    const objectLocation = document.createElement('p');
    objectLocation.textContent = `Location: ${event.location}`;
    objectElement.appendChild(objectLocation);

    const objectParticipants = document.createElement('p');
    objectParticipants.textContent = `Participants: ${event.participants}`;
    objectElement.appendChild(objectParticipants);

    const objectRating = document.createElement('p');
    objectRating.textContent = `Rating: ${event.rating}`;
    objectElement.appendChild(objectRating);

    const objectActivity = document.createElement('p');
    objectActivity.textContent = `Activity: ${event.activity}`;
    objectElement.appendChild(objectActivity);

    objectDetailsContainer.appendChild(objectElement);
}
