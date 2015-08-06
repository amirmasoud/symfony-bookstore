<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin/setting')) {
            // admin_setting_
            if (rtrim($pathinfo, '/') === '/admin/setting') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_setting_');
                }

                return array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::indexAction',  '_route' => 'admin_setting_',);
            }

            // admin_setting__show
            if (preg_match('#^/admin/setting/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting__show')), array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::showAction',));
            }

            // admin_setting__new
            if ($pathinfo === '/admin/setting/new') {
                return array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::newAction',  '_route' => 'admin_setting__new',);
            }

            // admin_setting__create
            if ($pathinfo === '/admin/setting/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_setting__create;
                }

                return array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::createAction',  '_route' => 'admin_setting__create',);
            }
            not_admin_setting__create:

            // admin_setting__edit
            if (preg_match('#^/admin/setting/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting__edit')), array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::editAction',));
            }

            // admin_setting__update
            if (preg_match('#^/admin/setting/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_setting__update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting__update')), array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::updateAction',));
            }
            not_admin_setting__update:

            // admin_setting__delete
            if (preg_match('#^/admin/setting/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_setting__delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting__delete')), array (  '_controller' => 'Chakosh\\OptionsBundle\\Controller\\OptionsController::deleteAction',));
            }
            not_admin_setting__delete:

        }

        // search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Chakosh\\SearchBundle\\Controller\\SearchController::searchAction',  '_route' => 'search',);
        }

        // avlTags
        if ($pathinfo === '/avlTags') {
            return array (  '_controller' => 'Chakosh\\SearchBundle\\Controller\\SearchController::availableTagsAction',  '_route' => 'avlTags',);
        }

        // chakosh_comment_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chakosh_comment_homepage')), array (  '_controller' => 'Chakosh\\CommentBundle\\Controller\\DefaultController::indexAction',));
        }

        // comment_create
        if ($pathinfo === '/comment/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_create;
            }

            return array (  '_controller' => 'Chakosh\\CommentBundle\\Controller\\CommentController::createAction',  '_route' => 'comment_create',);
        }
        not_comment_create:

        if (0 === strpos($pathinfo, '/blog2')) {
            // blog_show
            if (preg_match('#^/blog2/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::showAction',));
            }

            // blog_new
            if ($pathinfo === '/blog2/new') {
                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::newAction',  '_route' => 'blog_new',);
            }

            // blog_create
            if ($pathinfo === '/blog2/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_blog_create;
                }

                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::createAction',  '_route' => 'blog_create',);
            }
            not_blog_create:

            // blog_edit
            if (preg_match('#^/blog2/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::editAction',));
            }

            // blog_update
            if (preg_match('#^/blog2/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_blog_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_update')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::updateAction',));
            }
            not_blog_update:

            // blog_delete
            if (preg_match('#^/blog2/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_blog_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::deleteAction',));
            }
            not_blog_delete:

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag
            if (rtrim($pathinfo, '/') === '/tag') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tag');
                }

                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
            }

            // tag_show
            if (preg_match('#^/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::showAction',));
            }

            // tag_new
            if ($pathinfo === '/tag/new') {
                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
            }

            // tag_create
            if ($pathinfo === '/tag/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tag_create;
                }

                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::createAction',  '_route' => 'tag_create',);
            }
            not_tag_create:

            // tag_edit
            if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::editAction',));
            }

            // tag_update
            if (preg_match('#^/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tag_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_update')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::updateAction',));
            }
            not_tag_update:

            // tag_delete
            if (preg_match('#^/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\TagController::deleteAction',));
            }
            not_tag_delete:

        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog-cat')) {
                // blog-category
                if (rtrim($pathinfo, '/') === '/blog-cat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'blog-category');
                    }

                    return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::indexAction',  '_route' => 'blog-category',);
                }

                // blog-category_show
                if (preg_match('#^/blog\\-cat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog-category_show')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::showAction',));
                }

                // blog-category_new
                if ($pathinfo === '/blog-cat/new') {
                    return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::newAction',  '_route' => 'blog-category_new',);
                }

                // blog-category_create
                if ($pathinfo === '/blog-cat/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_blogcategory_create;
                    }

                    return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::createAction',  '_route' => 'blog-category_create',);
                }
                not_blogcategory_create:

                // blog-category_edit
                if (preg_match('#^/blog\\-cat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog-category_edit')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::editAction',));
                }

                // blog-category_update
                if (preg_match('#^/blog\\-cat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_blogcategory_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog-category_update')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::updateAction',));
                }
                not_blogcategory_update:

                // blog-category_delete
                if (preg_match('#^/blog\\-cat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_blogcategory_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog-category_delete')), array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\postCategoryController::deleteAction',));
                }
                not_blogcategory_delete:

            }

            // blog
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog');
                }

                return array (  '_controller' => 'Chakosh\\NewsBundle\\Controller\\PostController::indexBlogAction',  '_route' => 'blog',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/upload')) {
                // chakosh_upload_homepage
                if ($pathinfo === '/admin/upload') {
                    return array (  '_controller' => 'Chakosh\\UploadBundle\\Controller\\UploadController::uploadAction',  '_route' => 'chakosh_upload_homepage',);
                }

                // upload
                if ($pathinfo === '/admin/uploading') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_upload;
                    }

                    return array (  '_controller' => 'Chakosh\\UploadBundle\\Controller\\UploadController::uploadAction',  '_route' => 'upload',);
                }
                not_upload:

            }

            // show_files
            if ($pathinfo === '/admin/media') {
                return array (  '_controller' => 'Chakosh\\UploadBundle\\Controller\\UploadController::showAction',  '_route' => 'show_files',);
            }

            // ajax_show_modal
            if ($pathinfo === '/admin/ajax/modal') {
                return array (  '_controller' => 'Chakosh\\UploadBundle\\Controller\\UploadController::modalShowAction',  '_route' => 'ajax_show_modal',);
            }

        }

        // chakosh_home_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Chakosh\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'chakosh_home_homepage',);
        }

        // chakosh_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chakosh_blog_homepage');
            }

            return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::indexAction',  '_route' => 'chakosh_blog_homepage',);
        }

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::indexAction',  '_route' => '_home',);
        }

        // _show
        if (0 === strpos($pathinfo, '/b') && preg_match('#^/b/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_show')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::showAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_home');
                }

                return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::indexAdminAction',  '_route' => 'admin_home',);
            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::showAction',));
            }

            // admin_new
            if (rtrim($pathinfo, '/') === '/admin/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_new');
                }

                return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::editAction',));
            }

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\BookController::deleteAction',));
            }
            not_admin_delete:

            if (0 === strpos($pathinfo, '/admin/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                if (0 === strpos($pathinfo, '/admin/category/admin')) {
                    // category_new
                    if ($pathinfo === '/admin/category/admin/new') {
                        return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                    }

                    // category_create
                    if ($pathinfo === '/admin/category/admin/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_category_create;
                        }

                        return array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                    }
                    not_category_create:

                    // category_edit
                    if (preg_match('#^/admin/category/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::editAction',));
                    }

                    // category_update
                    if (preg_match('#^/admin/category/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::updateAction',));
                    }
                    not_category_update:

                    // category_delete
                    if (preg_match('#^/admin/category/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_category_delete:

                }

            }

        }

        // category_show
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Chakosh\\BlogBundle\\Controller\\CategoryController::categoryShowAction',));
        }

        // root
        if ($pathinfo === '/you-must-not-be-here') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/then-go-here',  'permanent' => true,  '_route' => 'root',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
