const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')

const nameAdmNewsStorage = localStorage.getItem('adm_name')

const inputImagens = document.getElementById('inputImagens')
const containerImagens = document.getElementById('containerImagens')

const authorNews = document.getElementById('author_news')
const cardForm = document.getElementById('formNews')
const cardEditForm = document.getElementById('newsEditForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')
const msgEditAlerta = document.getElementById('msgAlertaErroEditCard')

authorNews.value = nameAdmNewsStorage

console.log(cardForm)

inputImagens.addEventListener('change', function () {
  containerImagens.innerHTML = ''
  const files = this.files

  console.log(files[0])

  for (let i = 0; i < files.length; i++) {
    const file = files[i]
    const reader = new FileReader()

    reader.addEventListener('load', function () {
      const imagem = document.createElement('img')
      imagem.src = reader.result
      containerImagens.appendChild(imagem)
    })

    reader.readAsDataURL(file)
  }
})

const listNews = async () => {
  const dataUsers = await fetch(
    origin_url + baseURL + 'newsControllers.php?typeForm=get_all_news'
  )

  const response = await dataUsers.text()

  tbody.innerHTML = response
}

listNews()

cardForm.addEventListener('submit', async event => {
  event.preventDefault()

  alert(origin_url + baseURL + 'newsControllers.php?typeForm=create_news')
  const dataForm = new FormData(cardForm)

  // for (var dados of dataForm.entries()) {
  //   console.log(dados[0] + ' ' + dados[1])
  // }

  const dataNew = await fetch(
    origin_url + baseURL + 'newsControllers.php?typeForm=create_news',
    {
      method: 'POST',
      body: dataForm
    }
  )

  const response = await dataNew.json()

  if (response['error']) {
    msgAlerta.innerHTML = response['msg']
  } else {
    msgAlerta.innerHTML = response['msg']
    cardForm.reset()
    listNews()
  }

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 5000)

  listNews()
})

async function confirmDelete(idNews) {
  await fetch(
    origin_url +
      baseURL +
      'newsControllers.php?typeForm=delete_news&idNews=' +
      idNews
  )
  listNews()
}

function deleteNews(idNews) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    }
    // buttonsStyling: false
  })

  swalWithBootstrapButtons
    .fire({
      title: 'Tem certeza que pretende eliminar este documento?',
      text: 'Você não será capaz de reverter está acção!',
      icon: 'warning',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      showCancelButton: true,
      confirmButtonText: 'Sim, exclua!',
      cancelButtonText: 'Não, cancelar!',
      reverseButtons: true
    })
    .then(result => {
      if (result.isConfirmed) {
        confirmDelete(idNews)
        swalWithBootstrapButtons.fire(
          'Excluído!',
          'Newso foi excluído.',
          'success'
        )
        listNews()
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === swalWithBootstrapButtons.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Não excluído',
          'O documento não foi excluído :)',
          'error'
        )
      }
    })
}

async function editeNews(idNews) {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'newsControllers.php?typeForm=get_news&idNews=' +
      idNews
  )

  const response = await dataUsers.json()
  if (response['error']) {
    alert(response['msg'])
  } else {
    const documentData = response['dados']

    // console.log(documentData)
    const cadModal = document.getElementById('documentEditeModal')

    cadModal.style.visibility = 'visible'
    cadModal.classList.add('show')

    document.getElementById('description_news_edit').value =
      documentData.description_news
    console.log(document.getElementById('description_news_edit').value)

    document.getElementById('id_edit').value = documentData.id
    document.getElementById('name_utente_edit').value = documentData.name_utente
    document.getElementById('email_utente_edit').value =
      documentData.email_utente
    document.getElementById('phone_utente_edit').value =
      documentData.phone_utente
    document.getElementById('sector_news_edit').value = documentData.sector_news
    document.getElementById('state_news_edit').value = documentData.state_news
  }
}

cardEditForm.addEventListener('submit', async event => {
  event.preventDefault()
  const dataEditForm = new FormData(cardEditForm)

  // for (var dados of dataEditForm.entries()) {
  //   console.log(dados[0] + ' ' + dados[1] + ' ' + dados[2])
  // }

  dataEditForm.append('add', 1)

  const dataNew = await fetch(
    origin_url + baseURL + 'newsControllers.php?typeForm=edit_news',
    {
      method: 'POST',
      body: dataEditForm
    }
  )

  const response = await dataNew.json()

  if (response['error']) {
    msgEditAlerta.innerHTML = response['msg']
  } else {
    msgEditAlerta.innerHTML = response['msg']

    listNews()
  }

  listNews()

  setTimeout(() => {
    msgEditAlerta.innerHTML = ''
  }, 4000)
})
