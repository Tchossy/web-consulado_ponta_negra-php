const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')

const cardForm = document.getElementById('documentsForm')
const cardEditForm = document.getElementById('documentsEditForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')
const msgEditAlerta = document.getElementById('msgAlertaErroEditCard')

const listDocuments = async () => {
  const dataUsers = await fetch(
    origin_url + baseURL + 'documentsControllers.php?typeForm=get_all_documents'
  )

  const response = await dataUsers.text()

  tbody.innerHTML = response
}

listDocuments()

cardForm.addEventListener('submit', async event => {
  event.preventDefault()

  const dataForm = new FormData(cardForm)
  dataForm.append('add', 1)

  const dataNew = await fetch(
    origin_url + baseURL + 'documentsControllers.php?typeForm=create_document',
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
    listDocuments()
  }

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 5000)

  listDocuments()
})

async function confirmDelete(idDocument) {
  await fetch(
    origin_url +
      baseURL +
      'documentsControllers.php?typeForm=delete_document&idDocument=' +
      idDocument
  )
  listDocuments()
}

function deleteDocument(idDocument) {
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
        confirmDelete(idDocument)
        swalWithBootstrapButtons.fire(
          'Excluído!',
          'Documento foi excluído.',
          'success'
        )
        listDocuments()
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

async function editeDocument(idDocument) {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'documentsControllers.php?typeForm=get_document&idDocument=' +
      idDocument
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

    document.getElementById('description_document_edit').value =
      documentData.description_document
    console.log(document.getElementById('description_document_edit').value)

    document.getElementById('id_edit').value = documentData.id
    document.getElementById('name_utente_edit').value = documentData.name_utente
    document.getElementById('email_utente_edit').value =
      documentData.email_utente
    document.getElementById('phone_utente_edit').value =
      documentData.phone_utente
    document.getElementById('sector_document_edit').value =
      documentData.sector_document
    document.getElementById('state_document_edit').value =
      documentData.state_document
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
    origin_url + baseURL + 'documentsControllers.php?typeForm=edit_document',
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

    listDocuments()
  }

  listDocuments()

  setTimeout(() => {
    msgEditAlerta.innerHTML = ''
  }, 4000)
})
