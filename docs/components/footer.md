# Footer

DaisyUI [Footer](https://daisyui.com/components/footer/) 的 Blade 封装。

## 用法

### 推荐用法

```blade
<x-dui::footer>
  <nav>
    <x-dui::footer.title>Services</x-dui::footer.title>
    <x-dui::link :hover="true">Branding</x-dui::link>
    <x-dui::link :hover="true">Design</x-dui::link>
  </nav>
</x-dui::footer>
```

> 推荐使用 `<x-dui::link :hover="true">` 替代手写 `<a class="link link-hover">`。

```blade
<x-dui::footer>
  <nav>
    <x-dui::footer.title>Services</x-dui::footer.title>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
  </nav>
</x-dui::footer>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| center | bool | false | — |
| direction | string | null | horizontal, vertical |

## 子组件

### `<x-dui::footer.title>`

Footer 列标题。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 基本 Footer（旧用法）

```blade
<x-dui::footer class="p-10 bg-neutral text-neutral-content" direction="horizontal">
  <nav>
    <x-dui::footer.title>Services</x-dui::footer.title>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
  </nav>
  <nav>
    <x-dui::footer.title>Company</x-dui::footer.title>
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
  </nav>
</x-dui::footer>
```

### 居中 Footer

```blade
<x-dui::footer :center="true" direction="horizontal" class="p-10 bg-primary text-primary-content">
  <aside>
    <p>Copyright &copy; 2024 - All right reserved by ACME Industries Ltd</p>
  </aside>
</x-dui::footer>
```

### 响应式 Footer

```blade
<x-dui::footer class="p-10 bg-base-200 text-base-content sm:footer-horizontal">
  <nav>
    <x-dui::footer.title>Services</x-dui::footer.title>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
  </nav>
  <nav>
    <x-dui::footer.title>Legal</x-dui::footer.title>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
  </nav>
</x-dui::footer>
```

## 渲染结果

```html
<footer class="footer footer-center footer-horizontal">
  <nav>
    <h6 class="footer-title">Services</h6>
    <a class="link link-hover">Branding</a>
  </nav>
</footer>
```
