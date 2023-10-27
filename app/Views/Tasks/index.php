<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Tasks <?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title">Tasks</h1>

    <a class="button is-rounded is-outlined is-success" href="<?= site_url("/tasks/new") ?>">New Task</a>

    <div>
        <label class="has-text-weight-bold" for="query">Search</label>
        <input  name="query" id="query">
    </div>

    <?php if ($tasks): ?>

        <ul>
            <?php foreach($tasks as $task): ?>

                <li>
                    <a href="<?= site_url("/tasks/show/".$task->id) ?>">
                        <?= esc($task->descrpition)  ?>
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>

        <?= $pager->simpleLinks() ?>

    <?php else: ?>

        <p>No tasks found.</p>

    <?php endif; ?>

    <script src="<?= site_url('/js/auto-complete.min.js')?>"></script>

    <script>
        var searchUrl = "<?= site_url('/tasks/search?q=')?>";
        var showUrl = "<?= site_url('/tasks/show/')?>";
        var data;
        var i;

        var searchAutoComplete = new autoComplete({
            selector: 'input[name="query"]', 
            cache: false,
            source: function(term, response){
                var request = new XMLHttpRequest();

                request.open('GET', searchUrl + term, true);

                request.onload = function(){
                    
                    data = JSON.parse(this.response);

                    i = 0;

                    var suggestions = data.map(task => task.descrpition);

                    response(suggestions);
                };

             request.send();
            },
            renderItem: function (item, search) {

                var id = data[i].id;

                i++;

                return '<div class="autocomplete-suggestion" data-id="' + id + '">' + item + '</div>';
            },

            onSelect: function(e, term, item){

                window.location.href = showUrl + item.getAttribute('data-id');
            }
        });

    </script>
    
<?= $this->endSection() ?>

