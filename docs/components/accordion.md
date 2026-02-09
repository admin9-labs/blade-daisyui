# Accordion

DaisyUI [Accordion](https://daisyui.com/components/accordion/) 的 Blade 封装。

## 用法

```blade
<x-dui::accordion>
    <x-dui::accordion.item icon="arrow" radio name="faq" checked>
        <div class="collapse-title font-semibold">问题一？</div>
        <div class="collapse-content text-sm">回答内容。</div>
    </x-dui::accordion.item>
    <x-dui::accordion.item icon="arrow" radio name="faq">
        <div class="collapse-title font-semibold">问题二？</div>
        <div class="collapse-content text-sm">回答内容。</div>
    </x-dui::accordion.item>
</x-dui::accordion>
```

## Props

### accordion (index)

无自定义 Props。`<x-dui::accordion>` 是一个简单的容器 `<div>`，`radio` 和 `name` 属性在各 `accordion.item` 上设置。

### accordion.item

| Prop | Type | Default | Values |
|------|------|---------|--------|
| icon | string\|null | null | arrow, plus |
| name | string | 'accordion' | 任意字符串（需与父组件一致） |
| checked | bool | false | — |
| radio | bool | false | — |

## 子组件

- `<x-dui::accordion.item>` — 单个手风琴项，内部使用 `collapse` 样式

## 示例

### 带箭头图标的手风琴

```blade
<x-dui::accordion>
    <x-dui::accordion.item icon="arrow" radio name="faq" checked>
        <div class="collapse-title font-semibold">如何创建账户？</div>
        <div class="collapse-content text-sm">点击右上角的"注册"按钮，按照流程完成注册。</div>
    </x-dui::accordion.item>
    <x-dui::accordion.item icon="arrow" radio name="faq">
        <div class="collapse-title font-semibold">忘记密码怎么办？</div>
        <div class="collapse-content text-sm">在登录页面点击"忘记密码"，按照邮件中的说明操作。</div>
    </x-dui::accordion.item>
</x-dui::accordion>
```

### 带加减号图标

```blade
<x-dui::accordion>
    <x-dui::accordion.item icon="plus" radio name="faq2" checked>
        <div class="collapse-title font-semibold">如何更新个人信息？</div>
        <div class="collapse-content text-sm">进入"我的账户"设置，选择"编辑资料"进行修改。</div>
    </x-dui::accordion.item>
</x-dui::accordion>
```

### Checkbox 模式（多个可同时展开）

```blade
<x-dui::accordion>
    <x-dui::accordion.item icon="arrow">
        <div class="collapse-title font-semibold">第一项</div>
        <div class="collapse-content text-sm">内容一。</div>
    </x-dui::accordion.item>
    <x-dui::accordion.item icon="arrow">
        <div class="collapse-title font-semibold">第二项</div>
        <div class="collapse-content text-sm">内容二。</div>
    </x-dui::accordion.item>
</x-dui::accordion>
```

## 渲染结果

```html
<div>
  <div class="collapse collapse-arrow">
    <input type="radio" name="faq" checked="checked" />
    <div class="collapse-title font-semibold">问题一？</div>
    <div class="collapse-content text-sm">回答内容。</div>
  </div>
  <div class="collapse collapse-arrow">
    <input type="radio" name="faq" />
    <div class="collapse-title font-semibold">问题二？</div>
    <div class="collapse-content text-sm">回答内容。</div>
  </div>
</div>
```
