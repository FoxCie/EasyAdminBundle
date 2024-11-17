<?php

declare(strict_types=1);

namespace EasyCorp\Bundle\EasyAdminBundle\Provider;

use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Dto\AssetsDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\CrudDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\I18nDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\LocaleDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\MainMenuDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\UserMenuDto;
use EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Inject this in services that need to get the admin context object.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface AdminContextProviderInterface
{
    public function hasContext(): bool;

    public function getContext(bool $throw = false): ?AdminContext;

    public function getRequest(): Request;

    public function getReferrer(): ?string;

    public function getI18n(): I18nDto;

    public function getCrudControllers(): CrudControllerRegistry;

    public function getEntity(): EntityDto;

    public function getUser(): ?UserInterface;

    public function getAssets(): AssetsDto;

    public function getSignedUrls(): bool;

    public function getAbsoluteUrls(): bool;

    public function getDashboardTitle(): string;

    public function getDashboardFaviconPath(): string;

    public function getDashboardControllerFqcn(): string;

    public function getDashboardRouteName(): string;

    public function getDashboardContentWidth(): string;

    public function getDashboardSidebarWidth(): string;

    public function getDashboardHasDarkModeEnabled(): bool;

    public function getDashboardDefaultColorScheme(): string;

    /**
     * @return LocaleDto[]
     */
    public function getDashboardLocales(): array;

    public function getMainMenu(): MainMenuDto;

    public function getUserMenu(): UserMenuDto;

    public function getCrud(): ?CrudDto;

    public function getSearch(): ?SearchDto;

    public function getTemplatePath(string $templateName): string;

    public function usePrettyUrls(): bool;
}
