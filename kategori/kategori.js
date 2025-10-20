
document.querySelectorAll('.kategori').forEach(button => {
  button.addEventListener('click', async function (e) {
    e.preventDefault();
    const url = this.getAttribute('href');
    const content = document.querySelector('#content');

    content.classList.add('fade-out');
    try {
      const response = await fetch(url);
      const newContent = await response.text();

      
      setTimeout(() => {
        content.innerHTML = newContent; 
        content.classList.remove('fade-out'); 
        content.classList.add('fade-in'); 
         content.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
        setTimeout(() => {
          content.classList.remove('fade-in');
        }, 400);
      }, 400);
    } catch (error) {
      console.error('Gagal memuat konten:', error);
      content.innerHTML = "<p>Terjadi kesalahan saat memuat data.</p>";
      content.classList.remove('fade-out');
    }
  });
});
