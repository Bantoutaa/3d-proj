$(document).ready(function () {
    let currentModel = null;

    function hideAllModels() {
        $('#coke-can').hide();
        $('#fanta-can').hide();
        $('#sprite-can').hide();
    }

    function resetAttributes(modelId) {
        const model = document.querySelector(`#${modelId} transform`);
        if (model) {
            model.setAttribute('rotation', '0 1 0 0');
            const materials = model.querySelectorAll('Shape Appearance Material');
            materials.forEach(material => {
                material.setAttribute('wireframe', 'false');
            });
        }
    }

    function updateCurrentModel(modelId, name) {
        hideAllModels();
        if (currentModel) resetAttributes(currentModel);
        $(`#${modelId}`).show();
        currentModel = modelId;
        fetchDescription(name);
    }

    function fetchDescription(name) {
        $.ajax({
            url: '../controllers/controller.php',
            type: 'GET',
            data: { name: name },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    $('#description p').text(response.error);
                } else {
                    $('#description p').html(`
                        <strong>Description:</strong> ${response.description}<br>
                        <strong>Price:</strong> ${response.price}<br>
                        <strong>Volume:</strong> ${response.volume}
                    `);
                }
                console.log('Description fetched successfully:', response);
            },
            error: function (xhr, status, error) {
                console.error(`Failed to fetch description: ${status} - ${error}`);
            }
        });
    }

    $('#show-coke').click(function () {
        updateCurrentModel('coke-can', 'coke');
    });

    $('#show-fanta').click(function () {
        updateCurrentModel('fanta-can', 'fanta');
    });

    $('#show-sprite').click(function () {
        updateCurrentModel('sprite-can', 'sprite');
    });

    // Ensure no recursive manipulation of the scene
    if ($('scene background').length === 0) {
        $('scene').append('<background skyColor="0 0 0"></background>');
    }
});
