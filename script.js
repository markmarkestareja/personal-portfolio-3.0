const header = document.getElementById('header');

const headerContainer = document.createElement('div');
headerContainer.classList.add('header-container');

const headerText = document.createElement('div');
headerText.classList.add('header-text');
headerText.textContent = 'halo';

const headerVid = document.createElement('div');
headerVid.classList.add('header-vid');
headerVid.textContent = 'universe';


headerContainer.appendChild(headerText);
headerContainer.appendChild(headerVid);

header.appendChild(headerContainer);
