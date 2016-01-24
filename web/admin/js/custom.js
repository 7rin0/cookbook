!function ($) {

    /**
     * Init functions
     */
    setupSortableCollectionItem();
    setTranslatableFields();

    /**
     * Sidebar toggle
     */
    $('.sidebar .active > .submenu').toggle();

    $('.sidebar li.parent > a').on('click', function (event) {
        event.preventDefault();

        if ($(this).closest('li').hasClass('parent')) {
            $('.sidebar li').removeClass('open');
            $('.submenu').hide();
        }

        $(this)
            .closest('li')
            .addClass('open')
            .find('.submenu:first')
            .toggle(300);
    });

    /**
     * Delete collection item
     */
    $('body').on('click', 'a.deleteCollectionItem', function (event) {
        event.preventDefault();
        $(this).closest('.form-group').remove();
    });

    /**
     * Tooltip
     */
    $('[data-rel=tooltip]').tooltip({container:'body'});

    /**
     * Popover
     */
    $('[data-rel=popover]').popover({container:'body'});

    /**
     * Chosen
     */
    $(".chosen-select-no-search").chosen({disable_search: true});
    $(".chosen-select").chosen({width: "100%"});

    /**
     * Portfolio
     */
    $.bigfoot.portfolio();

    /**
     * Modal
     */
    $('body').on('click', 'a.in-modal', function(e) {
        e.preventDefault();

        $.get($(this).attr('href'), function(data) {
            var modal = Twig.render(modaleTemplate, {
                modal_content: data
            });

            var $modal = $(modal);

            $modal.on('shown', function () {
                $('.chosen-select', $modal).chosen();
            });

            $modal.modal('show');
        });
    });

    /**
     * Carousel
     */
    $('.carousel').each(function(e) {
        var nbVisible = Math.min(5, $(this).children().length);
        $(this).parent('.wrapper').css('width', width+'px');
        var width = 500 + (50 * (nbVisible - 1));

        $(this).carouFredSel({
            width: width,
            height: 250,
            align: false,
            padding: [0, width - (nbVisible * 50), 0, 0],
            items: {
                width: 50,
                height: 250,
                visible: nbVisible,
                minimum: 1
            },
            scroll: {
                items: 1,
                duration: 750,
                onBefore: function( data ) {
                    data.items.old.add( data.items.visible ).find( 'span' ).stop().slideUp();
                },
                onAfter: function( data ) {
                    data.items.visible.last().find( 'span' ).stop().slideDown();
                }
            },
            auto: false
        });

        $(this).children().click(function() {
            $(this).trigger( 'slideTo', [this, (-1 * nbVisible) + 1, 'prev'] );
        });
    });

    /**
     * Sortable
     */
    $('body').on('click', 'a.addCollectionItem', function (event) {
        event.preventDefault();
        addCollectionItem($(this).data('collection-id'), $(this).data('prototype-name'));
    });

    /**
     * Delete form
     */
    $('a#edit-form-delete-action').on('click', function () {
        bootbox.confirm($(this).data('confirm-message'), function (result) {
            if (result) {
                $('form#delete-form').submit();
            }
        });
    });

    /**
     * Confirm action
     */
    $('body').on('click', 'a.confirm-action', function (event) {
        event.preventDefault();
        var link = $(this).attr('href');
        bootbox.confirm($(this).data('confirm-message'), function (result) {
            if (result) {
                window.location.replace(link);
            }
        });
    });

}(jQuery);

/**
 * Translatable fields
 */
function setTranslatableFields()
{
    var $translatableFields = $('.translatable-fields');

    if ($translatableFields.length) {
        setupTranslatableFields($translatableFields);

        $('.locales-container').html(Twig.render(localeTabs, {locales: locales, currentLocale: currentLocale, basePath: basePath}));

        var $localeTab = $('.locale-tabs');
        $localeTab.on('click', 'a', function (event) {
            event.stopPropagation();

            if (!$(this).hasClass('active')) {
                var newLocale = $(this).data('locale');
                $('input[data-locale="'+newLocale+'"], textarea[data-locale="'+newLocale+'"]').closest('div.input-group').show();
                $('input[data-locale="'+currentLocale+'"], textarea[data-locale="'+currentLocale+'"]').closest('div.input-group').hide();

                $('a', $localeTab).removeClass('active');
                $(this).addClass('active');
                currentLocale = newLocale;
            }

            return false;
        });
    }
}

/**
 * Strpos
 */
function strpos (haystack, needle, offset)
{
    var i = (haystack + '').indexOf(needle, (offset || 0));

    return i === -1 ? false : i;
}

/**
 * Setup translatable fields
 */
function setupTranslatableFields($translatableFields)
{
    $translatableFields.parent().hide();
    // Getting all translated fields to set their parent's data attributes (default locale fields aren't initialized by the translationsubscriber)
    $('input[type="text"], textarea', $translatableFields).each(function() {
        var elementId       = $(this).attr('id');
        var parentElementId = elementId.substr(0, elementId.lastIndexOf('-')).replace('_translation', '');
        var $parentElement  = $('#'+parentElementId);

        $parentElement
            .data('locale', defaultLocale)
            .attr('data-locale', defaultLocale);

        $(this).appendTo($parentElement.parent());
    });

    var $wrapper = $('<div class="input-group"></div>');
    var $toWrap = $('input[data-locale], textarea[data-locale]');

    $toWrap.each(function() {
        if (!$(this).data('flag')) {
            $(this).wrap($wrapper);

            if ($(this).parent().hasClass('ckeditor')) {
                $(this).parent().removeClass('ckeditor');
                $(this).addClass('ckeditor');
            }

            $(this).after($('<span class="input-group-addon"><img src="' + basePath + '/bundles/bigfootcore/img/flags/'+$(this).data('locale')+'.gif" /></span>'));
            if ($(this).data('locale') != currentLocale) {
                $(this).closest('div.input-group').hide();
            }
            $(this).data('flag', true);
        }
    });
}

/**
 * Sort collection
 */
function setupSortableCollectionItem()
{
    var $sortableFields = $('input.sortable-field');
    if ($sortableFields.length > 0) {
        $sortableFields.closest('div.sortable-collection-item').parent().each(function() {
            $(this).sortable({
                connectWith: '.'+$(this).attr('class'),
                handle: '.accordion-heading',
                update: function () {
                    var inputs = $('input.sortable-field');
                    var nbElems = inputs.length;
                    $('input.sortable-field').each(function(idx) {
                        $(this).val(idx);
                    });
                }
            });
        });
    }
}

/**
 * Add item to collection
 */
function addCollectionItem(id, name)
{
    var collectionHolder = $(id);
    var prototypeName = '__name__';

    if (name != undefined) {
        prototypeName = name;
    }

    var prototype = collectionHolder.attr('data-prototype');
    var reg       = new RegExp(prototypeName, 'g');
    var form      = prototype.replace(reg, collectionHolder.children().length);
    var $form     = $(form);

    collectionHolder.append($form);

    setupSortableCollectionItem();
    setupTranslatableFields($form.find('div.translatable-fields'));

    if (CKEDITOR != undefined) {
        var $textAreas = $form.find('textarea.ckeditor');
        if ($textAreas.length) {
            $textAreas.each(function() {
                CKEDITOR.replace($(this).attr('id'));
            });
        }
    }
}

/**
 * Setup colorbox
 */
function setupColorboxScripts()
{
    $(".chosen-select").chosen();
    setTranslatableFields();
    if (CKEDITOR != undefined) {
        var $textAreas = $('#colorbox').find('textarea.ckeditor');
        if ($textAreas.length) {
            $textAreas.each(function() {
                CKEDITOR.replace($(this).attr('id'));
            });
        }
    }
}

/**
 * Init selects
 */
window.tags = [];

function initSelects()
{
    var tags = window.tags;

    if (tags.length == 0) {
        $.ajax({
            url: tagsPath,
            async: false,
            success: function(json) {
                tags = window.tags = $.parseJSON(json);
            }
        });
    }

    var arrayTags = new Array();

    if (tags != undefined && $.isArray(tags) && tags.length > 0) {
        arrayTags = tags;
    }

    var $tagsSelect = $('input.bigfoot_tags_field');

    $tagsSelect.tag({
        placeholder:$tagsSelect.attr('placeholder'),
        source: arrayTags
    });

    $(".chosen-select").chosen();
}
