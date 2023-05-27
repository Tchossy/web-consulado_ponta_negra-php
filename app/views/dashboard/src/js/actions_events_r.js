const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')

const nameAdmEventsStorage = localStorage.getItem('adm_name')

const inputImagens = document.getElementById('inputImagens')
const containerImagens = document.getElementById('containerImagens')
const inputImagensEdit = document.getElementById('inputImagensEdit')
const containerImagensEdit = document.getElementById('containerImagensEdit')

const authorEvents = document.getElementById('author_events')
const cardEventsForm = document.getElementById('formEvent')
const cardEditEventsForm = document.getElementById('eventEditForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')
const msgEditAlerta = document.getElementById('msgAlertaErroEditCard')

authorEvents.value = nameAdmEventsStorage

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
inputImagensEdit.addEventListener('change', function () {
  containerImagensEdit.innerHTML = ''
  const files = this.files

  console.log(files[0])

  for (let i = 0; i < files.length; i++) {
    const file = files[i]
    const reader = new FileReader()

    reader.addEventListener('load', function () {
      const imagem = document.createElement('img')
      imagem.src = reader.result
      containerImagensEdit.appendChild(imagem)
    })

    reader.readAsDataURL(file)
  }
})

const listEvents = async () => {
  const dataEvents = await fetch(
    origin_url + baseURL + 'eventsControllers.php?typeForm=get_all_events'
  )

  const response = await dataEvents.text()

  tbody.innerHTML = response
}

listEvents()

cardEventsForm.addEventListener('submit', async event => {
  event.preventDefault()

  const dataForm = new FormData(cardEventsForm)

  // for (var dados of dataForm.entries()) {
  //   console.log(dados[0] + ' ' + dados[1])
  // }

  const dataEvent = await fetch(
    origin_url + baseURL + 'eventsControllers.php?typeForm=create_event',
    {
      method: 'POST',
      body: dataForm
    }
  )

  const response = await dataEvent.json()

  console.log(response['msg'])

  if (response['error']) {
    msgAlerta.innerHTML = response['msg']
  } else {
    msgAlerta.innerHTML = response['msg']
    cardEventsForm.reset()
    listEvents()
    containerImagens.innerHTML = ''
  }

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 5000)

  listEvents()
})

async function confirmDelete(idEvent) {
  await fetch(
    origin_url +
      baseURL +
      'eventsControllers.php?typeForm=delete_event&idEvent=' +
      idEvent
  )
  listEvents()
}

function deleteEvent(idEvent) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    }
    // buttonsStyling: false
  })

  swalWithBootstrapButtons
    .fire({
      title: 'Tem certeza que pretende eliminar este evento?',
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
        confirmDelete(idEvent)
        swalWithBootstrapButtons.fire(
          'Excluído!',
          'O evento foi excluído.',
          'success'
        )
        listEvents()
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

async function editeEvent(idEvent) {
  const dataEvents = await fetch(
    origin_url +
      baseURL +
      'eventsControllers.php?typeForm=get_event&idEvent=' +
      idEvent
  )

  const response = await dataEvents.json()
  if (response['error']) {
    alert(response['msg'])
  } else {
    const eventsData = response['dados']

    const decodeImage = JSON.parse(eventsData.images_event)
    const imageEvent = decodeImage[0]

    const cadModal = document.getElementById('eventEditModal')

    containerImagensEdit.innerHTML = `<img src="${imageEvent}" />`

    cadModal.style.visibility = 'visible'
    cadModal.classList.add('show')

    document.getElementById('id_edit').value = eventsData.id
    document.getElementById('type_event_edit').value = eventsData.type_event
    document.getElementById('description_event_edit').value =
      eventsData.description_event
    document.getElementById('date_events_edit').value = eventsData.date_events
    document.getElementById('hours_start_event_edit').value =
      eventsData.hours_start_event
    document.getElementById('hours_end_event_edit').value =
      eventsData.hours_end_event
    document.getElementById('local_event_edit').value = eventsData.local_event
  }
}

cardEditEventsForm.addEventListener('submit', async event => {
  event.preventDefault()
  const dataEditForm = new FormData(cardEditEventsForm)

  // for (var dados of dataEditForm.entries()) {
  //   console.log(dados[0] + ' ' + dados[1] + ' ' + dados[2])
  // }

  dataEditForm.append('add', 1)

  console.log(
    origin_url + baseURL + 'eventsControllers.php?typeForm=edit_event'
  )
  const dataEvent = await fetch(
    origin_url + baseURL + 'eventsControllers.php?typeForm=edit_event',
    {
      method: 'POST',
      body: dataEditForm
    }
  )

  const response = await dataEvent.json()

  if (response['error']) {
    msgEditAlerta.innerHTML = response['msg']
  } else {
    msgEditAlerta.innerHTML = response['msg']

    listEvents()
  }

  listEvents()

  setTimeout(() => {
    msgEditAlerta.innerHTML = ''
  }, 8000)
})
