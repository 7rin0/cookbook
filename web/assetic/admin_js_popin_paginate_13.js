$(function() {
    $('body').on('click', '[data-container=paginate] [data-action=paginate]', function(event) {

        event.preventDefault();
        event.stopPropagation();

        var
            link      = $(this),
            container = link.closest('[data-container=paginate]'),
            total     = container.data('total'),
            href      = container.data('href'),
            selected  = container.data('selected'),
            per_page  = container.data('per-page'),
            page      = link.data('page');

        function refresh () {
                var
                    tmpl  = $('<li><a href="#_" data-action="paginate"></a></li>'),
                    pages = Math.ceil(total / per_page),
                    start = page < 3 ? 1 : page > (pages - 2) ? pages - 2 : page - 1;
                    end   = page < 3 ? 3 : page > (pages - 2) ? pages : page + 1;

                container.html('');

                if (page != 1) {
                    var element = tmpl.clone();

                    element.find('a').data('page', 1);
                    element.find('a').attr('data-page', 1);
                    element.find('a').html('<<');

                    container.append(element);
                }

                for (var i = start; i <= end; i++) {
                    var element = tmpl.clone();

                    element.find('a').data('page', i);
                    element.find('a').attr('data-page', i);
                    element.find('a').html(i);

                    if (i == page) {
                        element.addClass('active');
                    }

                    container.append(element);
                };

                if (page != pages) {
                    var element = tmpl.clone();

                    element.find('a').data('page', pages);
                    element.find('a').attr('data-page', pages);
                    element.find('a').html('>>');

                    container.append(element);
                }
            };

        $.ajax({
            url: href,
            method: 'POST',
            data: {
                'page'     : page,
                'selected' : selected
            }
        }).always(function (response) {
            if (response.status == 200) {
                var
                    content = response.content,
                    total   = response.total,
                    target  = $('[data-container=list]');

                target.html(content);
                target.data('total', total);
                target.attr('data-total', total);

                refresh();
            } else {
                //console.log(response.message);
            }
        });
    });
})
