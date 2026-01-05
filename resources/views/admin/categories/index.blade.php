@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3 mb-0">Categories table</h6>
                            <button type="button" class="btn btn-sm bg-gradient-primary mb-0 me-3" data-bs-toggle="modal"
                                data-bs-target="#createCategoryModal">
                                <i class="fa fa-plus me-2"></i>Add Category
                            </button>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
                                <span class="alert-icon"><i class="fa fa-check"></i></span>
                                <span class="alert-text">{{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Image</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $index => $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $index + 1 }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $category->category_name }}</p>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/categories/' . $category->category_image) }}" 
                                                     alt="{{ $category->category_name }}"
                                                     class="avatar avatar-lg border-radius-lg">
                                            </td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input status-toggle" 
                                                           type="checkbox" 
                                                           id="statusToggle{{ $category->id }}" 
                                                           data-category-id="{{ $category->id }}"
                                                           {{ $category->status == 'active' ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-link text-secondary mb-0 btn-md">
                                                    <i class="fa fa-pencil text-xl"></i>
                                                </button>
                                                <button class="btn btn-link text-secondary mb-0 btn-md">
                                                    <i class="fa fa-trash text-xl"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4">
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class="fa fa-inbox fa-3x text-muted mb-3"></i>
                                                    <h6 class="text-muted">No categories found</h6>
                                                    <p class="text-sm text-muted mb-0">Click "Add Category" to create your first category</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Category Modal -->
    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-gradient-primary text-white border-0">
                    <h5 class="modal-title text-white" id="createCategoryModalLabel">
                        <i class="fa fa-plus-circle me-2"></i>Create New Category
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                    id="categoryForm">
                    @csrf
                    <div class="modal-body p-4">
                        <!-- Category Name -->
                        <div class="mb-4">
                            <label for="category_name" class="form-label font-weight-bold">
                                Category Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                                id="category_name" name="category_name" placeholder="Enter category name"
                                value="{{ old('category_name') }}" required>
                            @error('category_name')
                                <div class="invalid-feedback d-block">
                                    <i class="fa fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">
                                Category Image <span class="text-danger">*</span>
                            </label>
                            <div class="image-upload-wrapper">
                                <div class="drop-zone @error('category_image') border-danger @enderror" id="dropZone">
                                    <div class="drop-zone-content" id="dropZoneContent">
                                        <i class="fa fa-cloud-upload fa-3x text-primary mb-3"></i>
                                        <h6 class="font-weight-bold">Drag & Drop Image Here</h6>
                                        <p class="text-sm text-muted mb-3">or</p>
                                        <button type="button" class="btn btn-sm bg-gradient-primary"
                                            onclick="document.getElementById('category_image').click()">
                                            <i class="fa fa-folder-open me-2"></i>Browse Files
                                        </button>
                                        <p class="text-xs text-muted mt-3 mb-0">Supported formats: JPG, PNG, GIF (Max: 2MB)
                                        </p>
                                    </div>
                                    <div class="image-preview d-none" id="imagePreview">
                                        <img src="" alt="Preview" id="previewImg">
                                        <button type="button" class="btn btn-sm btn-danger remove-image" id="removeImage">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <input type="file" class="d-none" id="category_image" name="category_image" accept="image/*"
                                    required>
                                @error('category_image')
                                    <div class="text-danger text-sm mt-2">
                                        <i class="fa fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="active"
                                    checked>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa fa-times me-2"></i>Cancel
                        </button>
                        <button type="submit" class="btn bg-gradient-primary">
                            <i class="fa fa-save me-2"></i>Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Drop Zone Styles */
        .drop-zone {
            border: 2px dashed #cbd5e0;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .drop-zone:hover {
            border-color: #5e72e4;
            background: linear-gradient(135deg, #f0f2ff 0%, #e8ebff 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(94, 114, 228, 0.15);
        }

        .drop-zone.dragover {
            border-color: #5e72e4;
            background: linear-gradient(135deg, #e8ebff 0%, #dce1ff 100%);
            box-shadow: 0 0 20px rgba(94, 114, 228, 0.3);
        }

        .drop-zone.border-danger {
            border-color: #f5365c !important;
        }

        .drop-zone-content {
            width: 100%;
        }

        /* Image Preview Styles */
        .image-preview {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .remove-image {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .remove-image:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(245, 54, 92, 0.4);
        }

        /* Modal Animation */
        .modal.fade .modal-dialog {
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .modal.show .modal-dialog {
            transform: scale(1);
            opacity: 1;
        }

        /* Form Enhancements */
        .form-control:focus {
            border-color: #5e72e4;
            box-shadow: 0 0 0 0.2rem rgba(94, 114, 228, 0.25);
        }

        .form-check-input:checked {
            background-color: #5e72e4;
            border-color: #5e72e4;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropZone = document.getElementById('dropZone');
            const fileInput = document.getElementById('category_image');
            const dropZoneContent = document.getElementById('dropZoneContent');
            const imagePreview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');
            const removeImageBtn = document.getElementById('removeImage');
            const modal = document.getElementById('createCategoryModal');

            // Drag and Drop functionality for image upload
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, () => {
                    dropZone.classList.add('dragover');
                });
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, () => {
                    dropZone.classList.remove('dragover');
                });
            });

            dropZone.addEventListener('drop', handleDrop);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                handleFiles(files);
            }

            fileInput.addEventListener('change', function () {
                handleFiles(this.files);
            });

            function handleFiles(files) {
                if (files.length > 0) {
                    const file = files[0];

                    // Validate file type
                    if (!file.type.startsWith('image/')) {
                        alert('Please upload an image file');
                        return;
                    }

                    // Validate file size (2MB)
                    if (file.size > 2 * 1024 * 1024) {
                        alert('File size must be less than 2MB');
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewImg.src = e.target.result;
                        dropZoneContent.classList.add('d-none');
                        imagePreview.classList.remove('d-none');
                    };
                    reader.readAsDataURL(file);

                    // Update file input
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileInput.files = dataTransfer.files;
                }
            }

            removeImageBtn.addEventListener('click', function () {
                fileInput.value = '';
                previewImg.src = '';
                dropZoneContent.classList.remove('d-none');
                imagePreview.classList.add('d-none');
            });

            // Reset form on modal close
            modal.addEventListener('hidden.bs.modal', function () {
                document.getElementById('categoryForm').reset();
                removeImageBtn.click();
            });

            // Reopen modal if there are validation errors
            @if($errors->any())
                var myModal = new bootstrap.Modal(document.getElementById('createCategoryModal'));
                myModal.show();
            @endif

            // Handle status toggle
            document.querySelectorAll('.status-toggle').forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const categoryId = this.getAttribute('data-category-id');
                    const newStatus = this.checked ? 'active' : 'inactive';
                    const toggleElement = this;

                    // Disable toggle during request
                    toggleElement.disabled = true;

                    fetch(`/admin/categories/${categoryId}/status`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            status: newStatus
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Show success notification
                            showNotification('Status updated successfully!', 'success');
                        } else {
                            // Revert toggle on failure
                            toggleElement.checked = !toggleElement.checked;
                            showNotification('Failed to update status', 'error');
                        }
                    })
                    .catch(error => {
                        // Revert toggle on error
                        toggleElement.checked = !toggleElement.checked;
                        showNotification('An error occurred', 'error');
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        // Re-enable toggle
                        toggleElement.disabled = false;
                    });
                });
            });

            // Notification function
            function showNotification(message, type) {
                const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
                const iconClass = type === 'success' ? 'fa-check' : 'fa-exclamation-circle';
                
                const notification = document.createElement('div');
                notification.className = `alert ${alertClass} alert-dismissible fade show position-fixed`;
                notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
                notification.innerHTML = `
                    <span class="alert-icon"><i class="fa ${iconClass}"></i></span>
                    <span class="alert-text">${message}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                
                document.body.appendChild(notification);
                
                // Auto remove after 3 seconds
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }
        });
    </script>
@endsection