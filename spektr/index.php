<?php 
// Соединяемся с базой данных
require_once 'blocks/date_base.php';
session_start();

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='index'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header.php");

// Подключаем modal_form
include ("blocks/modal.php");
?>

<!-- SVG -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
  </symbol>
  <symbol id="glass" viewBox="0 0 107.23 122.88"><defs><style>.a{fill-rule:evenodd;}</style></defs><title>glass-window</title><path class="a" d="M4.21,0H103a4.22,4.22,0,0,1,4.21,4.21V118.67a4.23,4.23,0,0,1-4.21,4.21H4.21A4.23,4.23,0,0,1,0,118.67V4.21A4.23,4.23,0,0,1,4.21,0ZM69,80.67a1.8,1.8,0,0,1,2.12,2.9l-4.87,3.59a1.8,1.8,0,0,1-2.12-2.9L69,80.67Zm19.12-16a1.8,1.8,0,1,1,2.33,2.74L75.9,79.72A1.8,1.8,0,1,1,73.58,77L88.11,64.65ZM89,78.92A1.79,1.79,0,1,1,91.3,81.7L68.41,100.39a1.79,1.79,0,1,1-2.26-2.78L89,78.92ZM37.18,42.55a1.8,1.8,0,1,1-2.13-2.9l4.87-3.59A1.8,1.8,0,1,1,42,39l-4.86,3.59Zm-19.13,16a1.8,1.8,0,1,1-2.32-2.74L30.26,43.5a1.8,1.8,0,0,1,2.32,2.74L18.05,58.57ZM17.13,44.3a1.79,1.79,0,0,1-2.26-2.78L37.75,22.83A1.79,1.79,0,1,1,40,25.61L17.13,44.3Zm-8.76-36H49.5V114.61H8.37V8.27Zm49.36,0H98.86V114.61H57.73V8.27Z"/>
  </symbol>
  <symbol id="ladder" viewBox="0 0 94.36 122.88" style="enable-background:new 0 0 94.36 122.88" xml:space="preserve"><g><path d="M61.33,84.97H22.27v-0.01c-0.12,0-0.24-0.01-0.36-0.04c-0.82-0.2-1.33-1.03-1.13-1.85l3.88-15.86 c0.11-0.74,0.75-1.3,1.52-1.3h39.07v0.01c0.12,0,0.24,0.01,0.36,0.04c0.82,0.2,1.33,1.03,1.13,1.85l-3.88,15.86 C62.74,84.41,62.1,84.97,61.33,84.97L61.33,84.97z M18.75,96.28h39.07v0.01c0.12,0,0.24,0.01,0.36,0.04 c0.82,0.2,1.33,1.03,1.13,1.85l-3.83,15.65c-0.4,1.66-0.09,3.33,0.73,4.68c0.82,1.35,2.16,2.39,3.82,2.79l0,0 c1.66,0.4,3.33,0.09,4.68-0.73c1.35-0.82,2.39-2.16,2.79-3.82L94.18,7.64c0.4-1.66,0.09-3.32-0.73-4.68 c-0.82-1.35-2.16-2.39-3.82-2.79c-1.66-0.4-3.33-0.09-4.68,0.73c-1.35,0.82-2.39,2.17-2.79,3.82l-4.6,18.82 c-0.11,0.74-0.75,1.3-1.52,1.3H36.97v-0.01c-0.12,0-0.24-0.01-0.36-0.04c-0.82-0.2-1.33-1.03-1.13-1.85l3.4-13.9 c0.4-1.66,0.09-3.32-0.73-4.68C37.32,3.03,35.99,2,34.33,1.59l-0.01,0C32.66,1.19,31,1.5,29.65,2.33 c-1.35,0.82-2.39,2.17-2.79,3.82L0.17,115.24c-0.4,1.66-0.09,3.32,0.73,4.68c0.82,1.35,2.16,2.39,3.82,2.79 c1.66,0.4,3.32,0.09,4.68-0.73c1.35-0.82,2.39-2.17,2.79-3.82l5.03-20.57C17.34,96.84,17.98,96.28,18.75,96.28L18.75,96.28z M33.45,36.16h39.07v0.01c0.12,0,0.24,0.01,0.36,0.04c0.82,0.2,1.33,1.03,1.13,1.85l-3.73,15.25c-0.11,0.74-0.75,1.3-1.52,1.3 H29.69V54.6c-0.12,0-0.24-0.01-0.36-0.04c-0.82-0.2-1.33-1.03-1.13-1.85l3.73-15.25C32.05,36.72,32.68,36.16,33.45,36.16 L33.45,36.16z"/></g>
  </symbol>
  <symbol id="frame" viewBox="0 0 122.88 104.81" style="enable-background:new 0 0 122.88 104.81" xml:space="preserve"><style type="text/css"><![CDATA[
	.st0{fill-rule:evenodd;clip-rule:evenodd;}
]]></style><g><path class="st0" d="M11.51,102.9v-44c-2.34,0.9-4.53,0.92-6.35,0.3c-1.42-0.48-2.62-1.34-3.5-2.45c-0.88-1.11-1.44-2.46-1.61-3.95 c-0.26-2.31,0.43-4.92,2.4-7.37l0,0c0.1-0.12,0.21-0.24,0.34-0.34L59.85,0.55c0.74-0.68,1.88-0.75,2.7-0.11l57.19,44.46l0,0 c0.09,0.07,0.17,0.14,0.25,0.23c2.65,2.85,3.31,6.01,2.67,8.68c-0.32,1.32-0.95,2.5-1.82,3.48c-0.87,0.98-1.98,1.74-3.24,2.19 c-2,0.72-4.38,0.7-6.79-0.44v43.74h-5.6v-46.2c0-1.01-39.23-32.02-43.56-35.39c-4.59,3.49-44.54,34.25-44.54,35.55v46.18 L11.51,102.9L11.51,102.9z M63.34,55.69v17.99h16.14v-0.05c0-4.96-2.03-9.47-5.3-12.74C71.33,58.04,67.54,56.13,63.34,55.69 L63.34,55.69z M63.34,77.48v15.62h16.14V77.48H63.34L63.34,77.48z M59.54,93.09V77.48H43.4v15.62H59.54L59.54,93.09z M59.54,73.68 V55.69c-4.21,0.45-7.99,2.35-10.84,5.2c-3.27,3.27-5.3,7.78-5.3,12.74v0.05H59.54L59.54,73.68z M35.59,101.02h51.69v3.8H35.59 V101.02L35.59,101.02z M61.44,51.79c6.01,0,11.47,2.46,15.42,6.41c3.96,3.96,6.41,9.42,6.41,15.42v23.26H39.6V73.62 c0-6.01,2.46-11.47,6.41-15.42C49.97,54.25,55.43,51.79,61.44,51.79L61.44,51.79z M93.76,3.55l17.17,0.7v23.19L93.76,16.11V3.55 L93.76,3.55L93.76,3.55z"/></g>
</symbol>
<symbol id="found" viewBox="0 0 122.88 114.94" style="enable-background:new 0 0 122.88 114.94" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M1.71,0h20.82c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H1.71C0.77,24.78,0,24.02,0,23.08 V1.71C0,0.77,0.77,0,1.71,0L1.71,0z M1.92,90.16h40.76c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H1.92 c-0.94,0-1.71-0.77-1.71-1.71V91.86C0.22,90.92,0.98,90.16,1.92,90.16L1.92,90.16z M100.51,90.16h20.53c0.94,0,1.71,0.77,1.71,1.71 v21.37c0,0.94-0.77,1.71-1.71,1.71h-20.53c-0.94,0-1.71-0.77-1.71-1.71V91.86C98.8,90.92,99.57,90.16,100.51,90.16L100.51,90.16z M51.34,90.16H92.1c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H51.34c-0.94,0-1.71-0.77-1.71-1.71V91.86 C49.63,90.92,50.4,90.16,51.34,90.16L51.34,90.16z M80.41,60.1h40.76c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71 H80.41c-0.94,0-1.71-0.77-1.71-1.71V61.81C78.7,60.87,79.47,60.1,80.41,60.1L80.41,60.1z M31.13,60.1h40.76 c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H31.13c-0.94,0-1.71-0.77-1.71-1.71V61.81 C29.43,60.87,30.19,60.1,31.13,60.1L31.13,60.1z M1.71,60.1h20.82c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71 H1.71C0.77,84.89,0,84.12,0,83.18V61.81C0,60.87,0.77,60.1,1.71,60.1L1.71,60.1z M1.92,30.05h40.76c0.94,0,1.71,0.77,1.71,1.71 v21.37c0,0.94-0.77,1.71-1.71,1.71H1.92c-0.94,0-1.71-0.77-1.71-1.71V31.76C0.22,30.82,0.98,30.05,1.92,30.05L1.92,30.05z M100.51,30.05h20.53c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71h-20.53c-0.94,0-1.71-0.77-1.71-1.71V31.76 C98.8,30.82,99.57,30.05,100.51,30.05L100.51,30.05z M51.34,30.05H92.1c0.94,0,1.71,0.77,1.71,1.71v21.37 c0,0.94-0.77,1.71-1.71,1.71H51.34c-0.94,0-1.71-0.77-1.71-1.71V31.76C49.63,30.82,50.4,30.05,51.34,30.05L51.34,30.05z M80.41,0 h40.76c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H80.41c-0.94,0-1.71-0.77-1.71-1.71V1.71 C78.7,0.77,79.47,0,80.41,0L80.41,0z M31.13,0h40.76c0.94,0,1.71,0.77,1.71,1.71v21.37c0,0.94-0.77,1.71-1.71,1.71H31.13 c-0.94,0-1.71-0.77-1.71-1.71V1.71C29.43,0.77,30.19,0,31.13,0L31.13,0z"/></g>
</symbol>
<symbol id="fence" viewBox="0 0 122.88 114.06" style="enable-background:new 0 0 122.88 114.06" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M22.64,0c1.19,2.12,12.71,22.15,12.71,22.4V42.6h12.19V22.4c0-0.24,11.52-20.27,12.71-22.4 c1.19,2.12,12.71,22.15,12.71,22.4V42.6h12.19V22.4c0-0.24,11.52-20.27,12.71-22.4c1.19,2.12,12.71,22.15,12.71,22.4V42.6h12.33 v4.86h-12.33V79.9h12.33v4.86h-12.33v29c0,0.16-0.13,0.3-0.3,0.3H85.43c-0.16,0-0.3-0.13-0.3-0.3v-29H72.94v29 c0,0.16-0.13,0.3-0.3,0.3H47.83c-0.16,0-0.3-0.13-0.3-0.3v-29H35.34v29c0,0.16-0.13,0.3-0.3,0.3H10.23c-0.16,0-0.3-0.13-0.3-0.3 v-29H0V79.9h9.93V47.46H0V42.6h9.93V22.4C9.93,22.15,21.44,2.12,22.64,0L22.64,0z M97.84,79.42c1.62,0,2.93,1.31,2.93,2.93 c0,1.62-1.31,2.93-2.93,2.93s-2.93-1.31-2.93-2.93C94.91,80.74,96.22,79.42,97.84,79.42L97.84,79.42z M97.84,41.54 c1.62,0,2.93,1.31,2.93,2.93c0,1.62-1.31,2.93-2.93,2.93s-2.93-1.31-2.93-2.93C94.91,42.85,96.22,41.54,97.84,41.54L97.84,41.54z M60.24,79.42c1.62,0,2.93,1.31,2.93,2.93c0,1.62-1.31,2.93-2.93,2.93c-1.62,0-2.93-1.31-2.93-2.93 C57.31,80.74,58.62,79.42,60.24,79.42L60.24,79.42z M60.24,41.54c1.62,0,2.93,1.31,2.93,2.93c0,1.62-1.31,2.93-2.93,2.93 c-1.62,0-2.93-1.31-2.93-2.93C57.31,42.85,58.62,41.54,60.24,41.54L60.24,41.54z M85.13,79.9V47.46H72.94V79.9H85.13L85.13,79.9z M47.53,79.9V47.46H35.34V79.9H47.53L47.53,79.9z M14.56,82c0.01,0.11,0.02,0.21,0.02,0.32c0,0.11-0.01,0.22-0.02,0.32v26.78h16.15 V22.4c0-0.97-4.58-7.29-8.07-13.11c-3.5,5.82-8.07,12.14-8.07,13.11v22.31c0.01,0.11,0.02,0.21,0.02,0.32 c0,0.11-0.01,0.22-0.02,0.32V82L14.56,82z M105.91,22.4c0-0.97-4.58-7.29-8.07-13.11c-3.5,5.82-8.07,12.14-8.07,13.11v87.03h16.15 V22.4L105.91,22.4z M68.31,22.4c0-0.96-4.58-7.29-8.07-13.11c-3.5,5.82-8.08,12.14-8.08,13.11v87.03h16.15V22.4L68.31,22.4z M22.63,79.42c1.62,0,2.93,1.31,2.93,2.93c0,1.62-1.31,2.93-2.93,2.93c-1.62,0-2.93-1.31-2.93-2.93 C19.71,80.74,21.02,79.42,22.63,79.42L22.63,79.42z M22.63,41.54c1.62,0,2.93,1.31,2.93,2.93c0,1.62-1.31,2.93-2.93,2.93 c-1.62,0-2.93-1.31-2.93-2.93C19.71,42.85,21.02,41.54,22.63,41.54L22.63,41.54z"/></g>
</symbol>
<symbol id="roof" viewBox="0 0 122.88 61.86" style="enable-background:new 0 0 122.88 61.86" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M11.51,61.86v-2.95c-2.34,0.9-4.53,0.92-6.35,0.3c-1.42-0.48-2.62-1.34-3.5-2.45 c-0.88-1.11-1.44-2.46-1.61-3.95c-0.26-2.31,0.43-4.92,2.4-7.37l0,0c0.1-0.12,0.21-0.24,0.34-0.34L59.85,0.55 c0.74-0.68,1.88-0.75,2.7-0.11l57.19,44.46l0,0c0.09,0.07,0.17,0.14,0.25,0.23c2.65,2.85,3.31,6.01,2.67,8.68 c-0.32,1.32-0.95,2.5-1.82,3.48c-0.87,0.98-1.98,1.74-3.24,2.19c-2,0.72-4.38,0.7-6.79-0.44v2.82h-5.6v-5.28 c0-1.01-39.23-32.02-43.56-35.39c-4.59,3.49-44.54,34.25-44.54,35.55v5.13H11.51L11.51,61.86z M93.77,3.55l17.17,0.7v23.19 L93.77,16.11V3.55L93.77,3.55z"/></g>
</symbol>
</svg>

<!---->
<!-- annotation -->
<div id="main" class="container col-xxl-8 px-4 py-5"><!-- style='background-color: #a1a1a1;' px-4 my-4 col-xxl-8 info py-4  -->
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5"><!--row flex-lg-row-reverse align-items-center g-3 py-5-->
        
		<div class="col-10 col-sm-8 col-lg-6"><!--col-10 col-sm-8 col-lg-6 img-center-->
            <img src="img/objects/offer.jpg" class="d-block mx-lg-auto img-fluid" alt="Спектр" width="700" height="500" loading="lazy"><!---->
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $myrow1['offer'] ?></h1><!--display-7 fw-bolder mb-6-->
			<h2 class="lead"><?php echo $myrow1['extra'] ?></h2><!--lead_p-->
			<div class="d-grid gap-2 d-md-flex justify-content-md-start"><!--d-grid gap-2 d-md-flex justify-content-md-start py-3-->
				<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Сделать заявку</button>
				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Заказать звонок</button>
				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Позвонить</button>
				<!--<a class="btn btn-primary btn-lg px-4 me-md-2" href="#modal">Сделать заявку</a>-->
            </div>
            
		</div>
    </div>
</div>

<div class="b-example-divider"></div>
<!---->
<!-- good -->
<div id="good" class="container px-4 py-5"><!-- style='background-color: #a1a1a1;' container px-4 my-4-->
    <h1 class="pb-2 border-bottom text-center test-custom">Товары</h1><!---->
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3"><!--row g-4 py-3 row-cols-1 row-cols-lg-3-->
        
		<div class="feature col"><!---->
            <div class="feature-icon"><!-- bg-primary bg-gradient-->
				<img src="img/objects/wood.jpg" class="d-block mx-lg-auto img-fluid" alt="Пиломатериалы" width="264" height="191" loading="lazy">
			</div>
            <h3 class="">Пиломатериалы</h3><!--lead_p text-center-->
			<p>Брус, доска, плинтус ... </p><!---->
			<a href="#" class="icon-link">
				Call to action
				<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
			</a>
        </div>
        
		<div class="feature-icon"><!-- bg-primary bg-gradient-->
			<div class="feature-icon"><!-- bg-primary bg-gradient-->
				<img src="img/objects/playwood.jpg" class="d-block mx-lg-auto img-fluid" alt="Стройматериалы" width="264" height="191" loading="lazy">
			</div>
            <h3 class="">Стройматериалы</h3><!--lead_p text-center-->
			<p>Гипсокартон, стекло, фанера ... </p><!---->
			<a href="#" class="icon-link">
				Call to action
				<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
			</a>
        </div>
		
		<div class="feature-icon"><!-- bg-primary bg-gradient-->
			<div class="feature-icon"><!-- bg-primary bg-gradient-->
				<img src="img/objects/ladder.jpg" class="d-block mx-lg-auto img-fluid" alt="Элементы лестниц" width="264" height="191" loading="lazy">
			</div>
            <h3 class="">Элементы лестниц</h3><!--lead_p text-center-->
			<p>Балясина, колонна, тетива ... </p><!---->
			<a href="#" class="icon-link">
				Call to action
				<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
			</a>
		</div>
	</div>
    <p class="text-center my-3"><a class="btn btn-lg btn-primary" href="catalog.php">Каталог товаров и услуг</a></p>
</div>

<div class="b-example-divider"></div>

<!-- services -->
<div class="container px-4 py-5" id="services">
	<h1 class="pb-2 border-bottom text-center test-custom">Строительные услуги</h1>
	<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#glass"/></svg>
			</div>
			<div>
				<h2>Стекло</h2>
				<p>Профессиональная резка стекла и зеркал по размерам заказчика. Простое, матовое, рифлёное стекло и зеркала.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
      
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#ladder"/></svg>
			</div>
			<div>
				<h2>Лестницы</h2>
				<p>Проектирование лестниц любого типа и сложности. Замеры, изготовление элементов, доставка, монтаж на месте.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
      
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#frame"/></svg>
			</div>
			<div>
				<h2>Срубы</h2>
				<p>Срубы домов и бань из бревна и бруса. Проектирование, изготовление на базе или непосредственно на место.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
	</div><!--row1-->
	
	<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#fence"/></svg>
			</div>
			<div>
				<h2>Заборы</h2>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
      
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#roof"/></svg>
			</div>
			<div>
				<h2>Кровля</h2>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
      
		<div class="col d-flex align-items-start">
			<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
				<svg class="bi" width="1.5em" height="1.5em"><use xlink:href="#found"/></svg>
			</div>
			<div>
				<h2>Фундаменты</h2>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
				</a>
			</div><!--roof-->
		</div><!--col-->
	</div><!--row2-->
	<p class="text-center my-3"><a class="btn btn-lg btn-primary" href="catalog.php">Каталог товаров и услуг</a></p>
</div><!--container-->

<div class="b-example-divider"></div>

<!-- about us -->
<div id="about" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;'-->
    <div class="row flex-lg-row align-items-center g-3">
		<h1 class="pb-2 border-bottom text-center test-custom">Строительная компания "Спектр"</h1>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/offer3.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" align="left">
        </div><!---->
		<div class="col-lg-6">
			<div class="flexBig color-dark">
				<h2 class="flexTitle">О компании</h2>
                <div class="flexTitle">
                    <div class="flexMiddle"><p></p>
						<p>Строительная компания "Спектр" уже 5 лет ведёт строительство домов из бруса и бревна, осуществляет каркасное строительство.</p>
						<p>В перечень строительных услуг входят также все виды кровельных работ, строительство фундамента; продажа, доставка и установка теплиц и парников; изготовление и монтаж лестниц, резка и установка стекла и зеркал; сварочные работы.</p>
					</div>
				</div>
				<h2 class="flexTitle border-bottom">Преимущества сотрудничества</h2>
				<div class="flexTitle">
                    <div class="flexMiddle"><p></p>
					<p>Наш опыт позволяет вести несколько объектов одновременно.</p>
					<p>Основная часть пиломатериала который мы продаем собственного производства, поэтому мы можем обеспечить высокое качество по доступным ценам.</p>
					<p>В зависимости от объема возможно предоставление индивидуальной скидки.</p>
					<p>Предоставляем высокое качество сервиса в плане подбора, распиловки пиломатериала и листового материала по индивидуальным размерам</p>
					<p>Оказываем услуги по доставке материалов до места строительства или ремонта.</p>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>


<!-- sale
<div id="sale" class="container px-4 my-4">
    <div class="row flex-lg-row align-items-center g-3">
		<h2 class="pb-2 border-bottom text-center test-custom">Горячие предложения - подумать как лучше назвать этот блок</h2>
		<div>
			<p class="lead_p fst-italic">Не могу определиться с формой этого блока:<br>
			или это будет табличка в виде прайса с перечислением какой-то продукции,<br>
			или в виде блога - картинка, цена, скидки за что-нибудь, акции за покупку чего-то для привлечения клиента!</p>
		</div>
	</div>
</div>
 -->

<div class="b-example-divider"></div>

<!-- contact -->
<div id="contact" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;'-->
    <div class="row flex-lg-row align-items-center g-3"><!--row flex-lg-row align-items-center g-5 py-5-->
		<h1 class="pb-2 border-bottom text-center test-custom">Наши контакты</h1>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/spektrum.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
		<div class="col-lg-6">
            <div class="flexBig color-dark">
                <h3 class="flexTitle">Информация</h2>
                <div class="flexTitle border-bottom">
                    <div class="flexMiddle">Адрес:</div>
					<div class="flexMiddle">г.Коряжма, ул.Советская, 17 (цокольный этаж)</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">Телефоны:</div>
					<div class="flexMiddle">911-551-81-91,<br>900-912-19-61,<br>921-075-26-56</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">WhatsApp:</div>
					<div class="flexMiddle">911-551-81-91,<br>900-912-19-61</div>
                </div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">E-mail:</div>
					<div class="flexMiddle">vagin.sergey@mail.ru</div>
				</div>
				<h3 class="flexTitle mt-3">Режим работы</h2>
				<div class="flexTitle border-bottom">
                    <div class="flexMiddle">понедельник - пятница:</div>
					<div class="flexMiddle">9:00 - 18:00</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">суббота, воскресенье</div>
					<div class="flexMiddle">9:00 - 15:00</div>
				</div>
			</div>
			<a class="btn btn-primary my-4" href="#modal">Сделать заявку</a>
		</div>
    </div>
</div>

<div class="b-example-divider"></div>

<?php 
// Подключаем FOOTER
include ("blocks/footer.php");
?>