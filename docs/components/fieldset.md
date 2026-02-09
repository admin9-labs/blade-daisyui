# Fieldset

DaisyUI [Fieldset](https://daisyui.com/components/fieldset/) 的 Blade 封装。

## 用法

```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Title</x-dui::fieldset.legend>
  <x-dui::input placeholder="Type here" />
  <x-dui::label>Description text</x-dui::label>
</x-dui::fieldset>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，支持所有 HTML 属性 |

## 子组件

### `<x-dui::fieldset.legend>`

Fieldset 的标题。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，支持所有 HTML 属性 |

## 示例

### 基本用法
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Page title</x-dui::fieldset.legend>
  <x-dui::input placeholder="My awesome page" />
  <x-dui::label>You can edit page title later on from settings</x-dui::label>
</x-dui::fieldset>
```

### 带背景和边框
```blade
<x-dui::fieldset class="bg-base-200 border-base-300 rounded-box w-xs border p-4">
  <x-dui::fieldset.legend>Page title</x-dui::fieldset.legend>
  <x-dui::input placeholder="My awesome page" />
  <x-dui::label>You can edit page title later on from settings</x-dui::label>
</x-dui::fieldset>
```

### 多个输入字段
```blade
<x-dui::fieldset class="bg-base-200 border-base-300 rounded-box w-xs border p-4">
  <x-dui::fieldset.legend>Page details</x-dui::fieldset.legend>
  <x-dui::label>Title</x-dui::label>
  <x-dui::input placeholder="My awesome page" />
  <x-dui::label>Slug</x-dui::label>
  <x-dui::input placeholder="my-awesome-page" />
  <x-dui::label>Author</x-dui::label>
  <x-dui::input placeholder="Name" />
</x-dui::fieldset>
```

### 登录表单
```blade
<x-dui::fieldset class="bg-base-200 border-base-300 rounded-box w-xs border p-4">
  <x-dui::fieldset.legend>Login</x-dui::fieldset.legend>
  <x-dui::label>Email</x-dui::label>
  <x-dui::input type="email" placeholder="Email" />
  <x-dui::label>Password</x-dui::label>
  <x-dui::input type="password" placeholder="Password" />
  <button class="btn btn-neutral mt-4">Login</button>
</x-dui::fieldset>
```

## 渲染结果
```html
<fieldset class="fieldset">
  <legend class="fieldset-legend">Page title</legend>
  <input type="text" class="input" placeholder="My awesome page" />
  <span class="label">Description text</span>
</fieldset>
```
