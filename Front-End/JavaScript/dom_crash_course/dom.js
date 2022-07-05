// // Examine the document object

// // console.dir(document)
// console.log(document.domain);
// console.log(document.url);
// console.log(document.title);
// console.log(document.doctype);
// console.log(document.head);
// console.log(document.all);
// console.log(document.all[10]);
// // document.all[10].textContent = 'Hello';
// console.log(document.forms);
// console.log(document.links);

// GET ELEMENTBYID //
// console.log(document.getElementById('header-title'));
// var headerTitle = document.getElementById('header-title');
// var header = document.getElementById('main-header');
// console.log(headerTitle);
// headerTitle.textContent='hello000';
// headerTitle.innerText = 'Good bye';
// headerTitle.innerHTML = '<h3>HIII</h3>';
// header.style.borderBottom = 'solid 3px #000'

// GETELMENTSBYCLASSNAME //
// var items = document.getElementsByClassName('list-group-item');
// console.log(items);
// console.log(items[1]);
// items[1].textContent = 'hello 2'
// items[1].style.fontWeight = 'bold';
// items[1].style.background = 'yellow'
// // giving STYLE TO all THESE //
// for(var i = 0 ; i<items.length; i++){
//   items[i].style.background = '#f4f4f4';
// }

// GETELMENTSBYTAGNAME //
// var li = document.getElementsByTagName('li');
// console.log(li);
// console.log(li[1]);
// li[1].textContent = 'hello 2'
// li[1].style.fontWeight = 'bold';
// li[1].style.background = 'yellow'
// // giving STYLE TO all THESE //
// for(var i = 0 ; i<li.length; i++){
//   li[i].style.background = '#f4f4f4';
// }

// QUERYSELECTOR //
// var header = document.querySelector('#main-header');
// header.style.borderBottom = 'solid 4px #ccc'
//
// var input = document.querySelector('input');
// input.value = 'Hello world'
//
// var submit = document.querySelector('input[type="submit"]')
// submit.value = "SEND"
//
// var item = document.querySelector('.list-group-item')
// item.style.color = 'red';
//
// var lastItem = document.querySelector('.list-group-item:last-child');
// lastItem.style.color = 'blue';
//
// var secItem = document.querySelector('.list-group-item:nth-child(2)');
// secItem.style.color = 'coral';

// // QUERY SELECTORALL //
// var titles = document.querySelectorAll('.title');
// console.log(titles);
// titles[0].textContent = 'Hello';
//
// var odd = document.querySelectorAll('li:nth-child(odd)')
// var even = document.querySelectorAll('li:nth-child(even)')
//
// for(var i = 0; i < odd.length; i++){
//   odd[i].style.background = '#f4f4f4'
//   even[i].style.background = '#ccc'
// }


// // TRAVERSING THE DOM //
var itemList = document.querySelector('#items')
// // parentNode
// console.log(itemList.parentNode);
// itemList.parentNode.style.background = '#ccc';
// console.log(itemList.parentNode.parentNode);

// // parentElement
// console.log(itemList.parentElement);
// itemList.parentElement.style.background = '#ccc';
// console.log(itemList.parentElement.parentElement);

// ChildNodes
// console.log(itemList.childNodes);

console.log(itemList.children);
console.log(itemList.children[1]);
itemList.children[1].style.background = 'yellow';
