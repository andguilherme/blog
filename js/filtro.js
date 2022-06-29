const parts = [
  new Blob(['you construct a file...'], {
    type: 'text/plain'
  }),
  ' Same way as you do with blob',
  new Uint16Array([33])
];

const file = new File(parts, 'pag.html', {type: "html"});


const fr = new FileReader();

fr.onload = (evt) => {
  document.body.innerHTML = `
   <a href="${URL.createObjectURL(file)}" download="${file.name}">download</a>
    <p>file type: ${file.type}</p>
    <p>file last modified: ${new Date(file.lastModified)}</p>
  `
}

fr.readAsText(file);

            //if (art[i] = b)  art.select.options.value = "TODOS"  {
          //   art.style.display = "block"
           // }
            //else  {

            //art.style.display = "none"

