const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')

const cardForm = document.getElementById('schedulingForm')
const cardEditForm = document.getElementById('schedulingEditForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')
const msgEditAlerta = document.getElementById('msgAlertaErroEditCard')

const listScheduling = async () => {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'schedulingControllers.php?typeForm=get_all_scheduling'
  )

  const response = await dataUsers.text()

  tbody.innerHTML = response
}

listScheduling()

cardForm.addEventListener('submit', async event => {
  event.preventDefault()

  const dataForm = new FormData(cardForm)
  dataForm.append('add', 1)

  const dataNew = await fetch(
    origin_url +
      baseURL +
      'schedulingControllers.php?typeForm=create_scheduling',
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
    listScheduling()
  }

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 5000)

  listScheduling()
})

async function confirmDelete(idScheduling) {
  await fetch(
    origin_url +
      baseURL +
      'schedulingControllers.php?typeForm=delete_scheduling&idScheduling=' +
      idScheduling
  )
  listScheduling()
}

function deleteScheduling(idScheduling) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    }
    // buttonsStyling: false
  })

  swalWithBootstrapButtons
    .fire({
      title: 'Tem certeza que pretende eliminar este agendamento?',
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
        confirmDelete(idScheduling)
        swalWithBootstrapButtons.fire(
          'Excluído!',
          'Agendamento foi excluído.',
          'success'
        )
        listScheduling()
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === swalWithBootstrapButtons.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Não excluído',
          'O agendamento não foi excluído :)',
          'error'
        )
      }
    })
}

async function editeScheduling(idScheduling) {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'schedulingControllers.php?typeForm=get_scheduling&idScheduling=' +
      idScheduling
  )

  const response = await dataUsers.json()
  if (response['error']) {
    alert(response['msg'])
  } else {
    const schedulingData = response['dados']

    console.log(schedulingData)
    const cadModal = document.getElementById('schedulingEditeModal')

    cadModal.style.visibility = 'visible'
    cadModal.classList.add('show')

    // console.log(response['dados'])

    document.getElementById('id_edit').value = schedulingData.id
    document.getElementById('name_utente_edit').value = schedulingData.name_user
    document.getElementById('email_utente_edit').value =
      schedulingData.real_email_user
    document.getElementById('phone_utente_edit').value =
      schedulingData.phone_user
    document.getElementById('secto_document_edit').value =
      schedulingData.secto_scheduling
    document.getElementById('scheduling_state_edit').value =
      schedulingData.scheduling_state
    document.getElementById('myDateInput').value =
      schedulingData.data_scheduling
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
    origin_url +
      baseURL +
      'schedulingControllers.php?typeForm=edite_scheduling',
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

    listUsers()
    setTimeout(() => {
      msgEditAlerta.innerHTML = ''
    }, 4000)
  }
})
