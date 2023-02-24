<!DOCTYPE html>
<html lang="de">
    <head>
        <% base_tag %>
        $MetaTags(false)
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8">
        <title>Steffen Kahl - Portfolio</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="96x96">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1e3755">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="$Mix("/css/styles.min.css")">
    </head>
    <body>
        <% include Header %>

        <div id="react-entry" data-baseurl="$Link"></div>
        $Layout

        <script src="$Mix("/js/main.js")"></script>
        <% include Footer %>
    </body>
</html>
