# Validator

DaisyUI [Validator](https://daisyui.com/components/validator/) 的 Blade 封装。

## 用法

`validator` CSS 类需要直接添加到 `<input>`/`<select>`/`<textarea>` 元素上，`<x-dui::validator>` 仅作为透传容器，不添加任何包裹 div。

```blade
<x-dui::input type="email" class="validator" required placeholder="mail@site.com" />
<x-dui::validator.hint>Enter valid email address</x-dui::validator.hint>
```

## Props

无自定义 Props。`<x-dui::validator>` 是透传组件，直接输出子内容。

> `input`、`select`、`textarea` 组件现在支持 `:validator="true"` prop，无需手写 `class="validator"`。

### 使用 validator prop（推荐）

```blade
<x-dui::input type="email" :validator="true" required placeholder="mail@site.com" />
<x-dui::validator.hint>Enter valid email address</x-dui::validator.hint>
```

## 子组件

### `<x-dui::validator.hint>`

验证提示文本，当同级 `validator` 元素无效时显示。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，支持所有 HTML 属性 |

> 添加 `hidden` 类可以让提示在隐藏时不占用空间。

## 示例

### Email 验证
```blade
<x-dui::input type="email" :validator="true" required placeholder="mail@site.com" />
<x-dui::validator.hint>Enter valid email address</x-dui::validator.hint>
```

### 密码验证
```blade
<x-dui::input type="password" class="validator" required placeholder="Password"
  minlength="8"
  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must be more than 8 characters" />
<x-dui::validator.hint>
  Must be more than 8 characters, including
  <br/>At least one number
  <br/>At least one lowercase letter
  <br/>At least one uppercase letter
</x-dui::validator.hint>
```

### Checkbox 验证
```blade
<x-dui::checkbox class="validator" required title="Required" />
<x-dui::validator.hint>Required</x-dui::validator.hint>
```

### Toggle 验证
```blade
<x-dui::toggle class="validator" required title="Required" />
<x-dui::validator.hint>Required</x-dui::validator.hint>
```

### Select 验证
```blade
<form>
  <x-dui::select class="validator" required>
    <option disabled selected value="">Choose:</option>
    <option>Tabs</option>
    <option>Spaces</option>
  </x-dui::select>
  <x-dui::validator.hint>Required</x-dui::validator.hint>
  <button class="btn" type="submit">Submit form</button>
</form>
```

### 登录表单验证
```blade
<x-dui::fieldset class="bg-base-200 border-base-300 rounded-box w-xs border p-4">
  <x-dui::fieldset>
    <x-dui::label>Email</x-dui::label>
    <x-dui::input type="email" class="validator" placeholder="Email" required />
    <x-dui::validator.hint class="hidden">Required</x-dui::validator.hint>
  </x-dui::fieldset>

  <x-dui::fieldset>
    <x-dui::label>Password</x-dui::label>
    <x-dui::input type="password" class="validator" placeholder="Password" required />
    <x-dui::validator.hint class="hidden">Required</x-dui::validator.hint>
  </x-dui::fieldset>

  <button class="btn btn-neutral mt-4" type="submit">Login</button>
</x-dui::fieldset>
```

## 渲染结果
```html
<input type="email" class="input validator" required placeholder="mail@site.com" />
<div class="validator-hint">Enter valid email address</div>
```
