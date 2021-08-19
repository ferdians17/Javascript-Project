const button =  document.querySelectorAll("button");

button.forEach(btn =>
{
	btn.addEventListener("click", ()=>
	{
		const tujuan = btn.getAttribute("de");
		document.querySelector(tujuan).classList.toggle("active");
	});
});
// console.log(button);