# Input

DaisyUI [Text Input](https://daisyui.com/components/input/) 的 Blade 封装。

## 用法

```blade
<x-dui::input placeholder="Type here" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string | null | xs, sm, md, lg, xl |
| ghost | bool | false | — |
| type | string | "text" | text, password, email, number, date, datetime-local, week, month, tel, url, search, time |
| validator | bool | false | 为元素添加 `validator` class |

## 示例

### 基本用法
```blade
<x-dui::input placeholder="Type here" />
```

### Ghost 样式
```blade
<x-dui::input :ghost="true" placeholder="Type here" />
```

### 不同类型
```blade
<x-dui::input type="email" placeholder="mail@site.com" />
<x-dui::input type="password" placeholder="Password" />
<x-dui::input type="number" placeholder="0" />
<x-dui::input type="date" />
```

### 颜色
```blade
<x-dui::input color="primary" placeholder="Primary" />
<x-dui::input color="secondary" placeholder="Secondary" />
<x-dui::input color="accent" placeholder="Accent" />
<x-dui::input color="neutral" placeholder="Neutral" />
<x-dui::input color="info" placeholder="Info" />
<x-dui::input color="success" placeholder="Success" />
<x-dui::input color="warning" placeholder="Warning" />
<x-dui::input color="error" placeholder="Error" />
```

### 尺寸
```blade
<x-dui::input size="xs" placeholder="Xsmall" />
<x-dui::input size="sm" placeholder="Small" />
<x-dui::input size="md" placeholder="Medium" />
<x-dui::input size="lg" placeholder="Large" />
<x-dui::input size="xl" placeholder="Xlarge" />
```

### 配合 Fieldset 使用
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>What is your name?</x-dui::fieldset.legend>
  <x-dui::input placeholder="Type here" />
  <x-dui::label>Optional</x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::input placeholder="You can't touch this" disabled />
```

### 验证态
```blade
<x-dui::input type="email" :validator="true" required placeholder="mail@site.com" />
<x-dui::validator.hint>Enter valid email address</x-dui::validator.hint>
```

## 渲染结果
```html
<input type="text" class="input" placeholder="Type here" />
<input type="email" class="input input-primary" placeholder="mail@site.com" />
<input type="text" class="input input-lg input-ghost" placeholder="Type here" />
<input type="email" class="input validator" required placeholder="mail@site.com" />
```

## 使用建议

### Best used for

- 常规表单输入，优先以 `neutral` 建立稳定基线
- 需要 calm UI 的设置页、审核页、后台配置区
- 配合 `fieldset`、`label`、`validator.hint` 形成完整输入栈

### Avoid when

- 在边界不清楚的容器里直接使用 `ghost`
- 用颜色代替表单层级和说明文字
- 只放输入框不放 label / hint，迫使用户靠 placeholder 理解字段
