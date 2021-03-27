if (document.URL.match( /create/ )) {
  const propertyHidden = document.getElementById('propertyHidden');
  const submitBtn = document.getElementById('submitBtn');
  submitBtn.addEventListener('click', () => {
    let property2 = (document.getElementById('property2').checked) ? 2 : 1;
    let property3 = (document.getElementById('property3').checked) ? 3 : 1;
    let property5 = (document.getElementById('property5').checked) ? 3 : 1;
    let property7 = (document.getElementById('property7').checked) ? 3 : 1;
    propertyHidden.value = property2 * property3 * property5 * property7;
  });
}
