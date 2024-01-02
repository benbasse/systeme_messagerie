<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Messagerie</title>
</head>

<body>

<!-- showModuleQuestions.blade.php -->
<div id="questions-container">
    @foreach ($questions as $question)
        <div class="question" data-question-id="{{ $question->id }}">
            {{ $question->contenue }}
        </div>
        <div class="reponses" id="reponses-{{ $question->id }}"></div>
    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.question').click(function () {
            var questionId = $(this).data('question-id');
            var reponsesContainer = $('#reponses-' + questionId);

            // Appeler le contrôleur pour récupérer les réponses en utilisant AJAX
            $.get('/answers/' + questionId, function (data) {
                var reponses = data.reponses;
                var html = '<ul>';
                for (var i = 0; i < reponses.length; i++) {
                    html += '<li>' + reponses[i].contenu + '</li>';
                }
                html += '</ul>';

                // Afficher les réponses dans le conteneur approprié
                reponsesContainer.html(html);
            });
        });
    });
</script>

</body>

</html>