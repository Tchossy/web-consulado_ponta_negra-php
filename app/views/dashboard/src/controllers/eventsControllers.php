<?php

session_start();
include_once "../db/config.php";

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$type_form = $_GET['typeForm'];

function getWeek(string $fWeek = null): string
{
  if ($fWeek == 'Sunday') {
    return 'Domingo';
  } elseif ($fWeek == 'Monday') {
    return 'Segunda-Feira';
  } elseif ($fWeek == 'Tuesday') {
    return 'Terca-Feira';
  } elseif ($fWeek == 'Wednesday') {
    return 'Quarta-Feira';
  } elseif ($fWeek == 'Thursday') {
    return 'Quinta-Feira';
  } elseif ($fWeek == 'Friday') {
    return 'Sexta-Feira';
  } elseif ($fWeek == 'Saturday') {
    return 'Sábado';
  }
}
function getMonth(string $fMonth = null): string
{
  if ($fMonth == 'January') {
    return 'Janeiro';
  } elseif ($fMonth == 'February') {
    return 'Fevereiro';
  } elseif ($fMonth == 'March') {
    return 'Marco';
  } elseif ($fMonth == 'April') {
    return 'Abril';
  } elseif ($fMonth == 'May') {
    return 'Maio';
  } elseif ($fMonth == 'June') {
    return 'Junho';
  } elseif ($fMonth == 'July') {
    return 'Julho';
  } elseif ($fMonth == 'August') {
    return 'Agosto';
  } elseif ($fMonth == 'September') {
    return 'Novembro';
  } elseif ($fMonth == 'October') {
    return 'Setembro';
  } elseif ($fMonth == 'November') {
    return 'Outubro';
  } elseif ($fMonth == 'December ') {
    return 'Dezembro';
  }
}

if ($type_form == 'create_event') {
  $data = date('D');
  $mes = date('M');
  $dia = date('d');
  $ano = date('Y');

  $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
  );

  $mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
  );

  $completeDate =  $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

  $data_form = $dataForm['date_events'];
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
  $timestamp = strtotime($data_form);
  $dayOfWeek = date('l', $timestamp);
  $day = date('d', $timestamp);
  $month = date('F', $timestamp);
  $year = date('Y', $timestamp);
  $ptWeek = getWeek($dayOfWeek);
  $ptMonth = getMonth($month);
  $data_complete = "$ptWeek, $day de $ptMonth de $year  ";

  $image_events_form = $_FILES['images_event'];
  $images_array_events_form = [];
  $type_event_form = $dataForm['type_event'];
  $description_event_form = $dataForm['description_event'];
  $date_day_event_form = $day;
  $date_week_day_event_form = $ptWeek;
  $date_month_event_form = $ptMonth;
  $date_year_event_form = $year;
  $hours_start_event_form = $dataForm['hours_start_event'];
  $hours_end_event_form = $dataForm['hours_end_event'];
  $local_event_form = $dataForm['local_event'];
  $date_create_form = $completeDate;

  if (empty($type_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo tipo de evento está vazio </div>"];
  } elseif (empty($description_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo descrição está vazio </div>"];
  } elseif (empty($data_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo data está vazio </div>"];
  } elseif (empty($hours_start_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo hora de inicio do evento está vazio</div>"];
  } elseif (empty($hours_end_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo hora de encerramento do evento está vazio</div>"];
  } elseif (empty($local_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo local do evento está vazio</div>"];
  } else {

    foreach ($image_events_form['name'] as $key => $name) {
      $size_max = 2097152; //2MB
      $accept  = array("jpg", "png", "jpeg");
      $extension  = pathinfo($image_events_form['name'][$key], PATHINFO_EXTENSION);

      if ($image_events_form['size'][$key] >= $size_max) {
        $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: A imagem excedeu o tamanho máximo de 2MB! </div>"];
      } else {
        if (in_array($extension, $accept)) {
          // echo "Permitido";
          $folder = '../../../../_imagesDb/events/';

          if (!is_dir($folder)) {
            mkdir($folder, 755, true);
          }

          // Nome temporário do arquivo
          $tmp = $image_events_form['tmp_name'][$key];
          // Novo nome do arquivo
          $newName = "img_events-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension";

          if (move_uploaded_file($tmp, $folder . $newName)) {
            $image_events = 'https://consuladoangolapontanegra.org/app/_imagesDb/events/' . $newName;
            array_push($images_array_events_form, $image_events);
            // echo "Upload realizado com sucesso!";
          } else {
            $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: ao realizar Upload... </div>"];
          }
        } else {
          $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: Extensão ($extension) não permitido! </div>"];
        }
      }
    }

    $encode_images_array_events = json_encode($images_array_events_form);

    $sql = $pdo->prepare("INSERT INTO events values(null,?,?,?,?,?,?,?,?,?,?,?)");

    if ($sql->execute(array(
      $encode_images_array_events,
      $type_event_form,
      $description_event_form,
      $date_day_event_form,
      $date_week_day_event_form,
      $date_month_event_form,
      $date_year_event_form,
      $hours_start_event_form,
      $hours_end_event_form,
      $local_event_form,
      $date_create_form
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> A noticia foi publicada com sucesso </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao publicar a noticia </div>"];
    };
  }

  echo json_encode($return);
}

if ($type_form == 'get_all_events') {
  $result_events = $pdo->prepare("SELECT * FROM events ORDER BY id DESC ");
  $result_events->execute();
  $num_events = $result_events->rowCount();

  if ($num_events <= 0) {
    echo $return = "<div class='alert alert-danger' role='alert' id='msgAlerta'> Não tem nenhuma noticia no momento </div>";
  } else {
    $return = "";

    while ($row_events = $result_events->fetch(PDO::FETCH_ASSOC)) {

      extract($row_events);

      $decode_images_event = json_decode($images_event);

      $url_image = "";

      if ($decode_images_event) {
        $url_image = $decode_images_event[0];
      } else {
        $url_image = "https://img.freepik.com/free-vector/realistic-news-studio-background_23-2149985606.jpg";
      }

      $return .= "
                <tr>
                  <td>
                    <p>$id</p>
                  </td>
                  <td>
                    <img src='$url_image' />
                  </td>
                  <td>
                    <p>$type_event</p>
                  </td>
                  <td>
                    <p>$description_event</p>
                  </td>
                  <td>
                    <p>$date_week_day_event , $date_day_event de $date_month_event de $date_year_event</p>
                  </td>
                  <td>
                    <p>$hours_start_event | $hours_end_event</p>
                  </td>
                  <td>
                    <p>$local_event</p>
                  </td>
                  <td class='row'>
                    <button onclick='editeEvent($id)' class='status edite'>Editar</button>
                    <button onclick='deleteEvent($id)' class='status delete'>Apagar</button>
                  </td>
                </tr>
                ";
    }

    echo $return;
  }
}

if ($type_form == 'delete_event') {
  $id_event = $_GET['idEvent'];

  $result_events = $pdo->prepare("DELETE FROM events WHERE id=?");

  if ($result_events->execute(array($id_event))) {
    $return = ['error' => false, 'msg' => "Ouve algum erro ao excluir a noticia"];
  } else {
    $return = ['error' => true, 'msg' =>  "A noticia não foi excluído :)"];
  }
}

if ($type_form == 'get_event') {
  $id_event = $_GET['idEvent'];

  $result_events = $pdo->prepare("SELECT * FROM events WHERE id = ? ORDER BY id LIMIT 1");
  $result_events->execute(array($id_event));
  $num_events = $result_events->rowCount();

  if ($num_events >= 1) {
    $row_events = $result_events->fetch(PDO::FETCH_ASSOC);

    $return = ['error' => false, 'dados' => $row_events];

    echo json_encode($return);
  } else {
    $return = ['error' => true, 'msg' => "Nenhum evento com esse id foi encontrado"];

    echo json_encode($return);
  }
}

if ($type_form == 'edit_event') {
  $data_form = $dataForm['date_events'];
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
  $timestamp = strtotime($data_form);
  $dayOfWeek = date('l', $timestamp);
  $day = date('d', $timestamp);
  $month = date('F', $timestamp);
  $year = date('Y', $timestamp);
  $ptWeek = getWeek($dayOfWeek);
  $ptMonth = getMonth($month);
  $data_complete = "$ptWeek, $day de $ptMonth de $year  ";

  $id_event = $dataForm['id_event'];
  $image_events_form = $_FILES['images_event'];
  $images_array_events_form = [];
  $type_event_form = $dataForm['type_event'];
  $description_event_form = $dataForm['description_event'];
  $date_day_event_form = $day;
  $date_week_day_event_form = $ptWeek;
  $date_month_event_form = $ptMonth;
  $date_year_event_form = $year;
  $hours_start_event_form = $dataForm['hours_start_event'];
  $hours_end_event_form = $dataForm['hours_end_event'];
  $local_event_form = $dataForm['local_event'];

  if (empty($type_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo tipo de evento está vazio </div>"];
  } elseif (empty($description_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo descrição está vazio </div>"];
  } elseif (empty($data_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo data está vazio </div>"];
  } elseif (empty($hours_start_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo hora de inicio do evento está vazio</div>"];
  } elseif (empty($hours_end_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo hora de encerramento do evento está vazio</div>"];
  } elseif (empty($local_event_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo local do evento está vazio</div>"];
  } else {

    foreach ($image_events_form['name'] as $key => $name) {
      $size_max = 2097152; //2MB
      $accept  = array("jpg", "png", "jpeg");
      $extension  = pathinfo($image_events_form['name'][$key], PATHINFO_EXTENSION);

      if ($image_events_form['size'][$key] >= $size_max) {
        $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: A imagem excedeu o tamanho máximo de 2MB! </div>"];
      } else {
        if (in_array($extension, $accept)) {
          // echo "Permitido";
          $folder = '../../../../_imagesDb/events/';

          if (!is_dir($folder)) {
            mkdir($folder, 755, true);
          }

          // Nome temporário do arquivo
          $tmp = $image_events_form['tmp_name'][$key];
          // Novo nome do arquivo
          $newName = "img_events-" . date('d-m-Y') . '-' . date('H') . 'h-' . uniqid() . ".$extension";

          if (move_uploaded_file($tmp, $folder . $newName)) {
            $image_events = 'https://consuladoangolapontanegra.org/app/_imagesDb/events/' . $newName;
            array_push($images_array_events_form, $image_events);
            // echo "Upload realizado com sucesso!";
          } else {
            $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: ao realizar Upload... </div>"];
          }
        } else {
          $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: Extensão ($extension) não permitido! </div>"];
        }
      }
    }

    $encode_images_array_events = json_encode($images_array_events_form);

    if ($images_array_events_form == []) {
      $sql = $pdo->prepare("UPDATE events SET type_event=?, description_event=?, date_day_event=?, date_week_day_event=?, date_month_event=?, date_year_event=?, hours_start_event=?, hours_end_event=?, local_event=? WHERE id=? ");

      if ($sql->execute(array(
        $type_event_form,
        $description_event_form,
        $date_day_event_form,
        $date_week_day_event_form,
        $date_month_event_form,
        $date_year_event_form,
        $hours_start_event_form,
        $hours_end_event_form,
        $local_event_form,
        $id_event
      ))) {
        $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> A noticia foi actualizada com sucesso </div>"];
      } else {
        $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao actualizar a noticia </div>"];
      };
    } else {
      $sql = $pdo->prepare("UPDATE events SET images_event=?, type_event=?, description_event=?, date_day_event=?, date_week_day_event=?, date_month_event=?, date_year_event=?, hours_start_event=?, hours_end_event=?, local_event=? WHERE id=? ");

      if ($sql->execute(array(
        $encode_images_array_events,
        $type_event_form,
        $description_event_form,
        $date_day_event_form,
        $date_week_day_event_form,
        $date_month_event_form,
        $date_year_event_form,
        $hours_start_event_form,
        $hours_end_event_form,
        $local_event_form,
        $id_event
      ))) {
        $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> A noticia foi actualizada com sucesso </div>"];
      } else {
        $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao actualizar a noticia </div>"];
      };
    }
  }
  echo json_encode($return);
}