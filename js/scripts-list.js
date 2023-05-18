window.onload = () => {

  const eventsArray = [
    { id: 1, name: "Event 1" },
    { id: 2, name: "Event 2" },
    { id: 3, name: "Event 3" },
  ];
  
  // Get the reference to the object list <ul> element
  const eventList = document.getElementById("event-list");
  
  // Loop through the array of objects and create list items with links
  eventsArray.forEach(event => {
    const listItem = document.createElement("li");
    const link = document.createElement("a");
    link.textContent = event.name;
    link.href = `object.html?ev_id=${event.id}&ev_name=${event.name}`; // Set the object page URL with the object ID as a query parameter
    listItem.appendChild(link);
    eventList.appendChild(listItem);
  });
}